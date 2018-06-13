<?php

namespace ukvp;

// вспомогательные процедуры и функции, используемые в бизнес-логике
class Utils
{
   /*
    * Типы дней недели
    */
   const WEEKEND_DAY = 0;
   const WORK_DAY = 1;
   const WORK_SATURDAY_DAY = 2;
   const WORK_SHORT_DAY = 3;
   
   /*
    * Время начала рабочего дня от типа дня недели
    * Формат - ч*100+м
    */
   protected $minWorkTimes = [0,845,915,845];
   
   /*
    * Время конца рабочего дня от типа дня недели
    * Формат - ч*100+м
    */
   protected $maxWorkTimes = [0,1630,1230,1230];
   
   /*
    * Определяет является ли день рабочим
    * В первом варианте просто возвращает номер дня недели
    * Если номер = 0, то это вокресенье
    * TODO: определять праздники и сокращенные дни
    */
   public function isWorkDay(int $timestamp = 0){

      if($timestamp == 0) $timestamp = time();
      
      $dow = (int) date('w',$timestamp);
      
      if ($dow == 0){
         return $this::WEEKEND_DAY;
      }elseif($dow == 6){
         return $this::WORK_SATURDAY_DAY;
      }else{
         return $this::WORK_DAY;
      }
      
   }
   
   /*
    * Возвращает true если переданный аргумент - рабочее время
    * Если аргумент отсутствует, используется текущее время
    */
   public function isWorkTime(int $timestamp = 0){
      
      if($timestamp == 0) $timestamp = time();
      
      $dow = $this->isWorkDay($timestamp);
      if ($dow == $this::WEEKEND_DAY) return false;
      
      $hour = (int) date('G',$timestamp);
      $minute = (int) date('i',$timestamp);
      $curTime = $hour*100+$minute; // 830, 1645, etc.
      
      $minWorkTime = $this->minWorkTimes[$dow];
      $maxworkTime = $this->maxWorkTimes[$dow];
      
      return ($curTime > $minWorkTime && $curTime < $maxworkTime);
   }
   
   /*
    * Возвращает timestamp следующего возможного времени работы консультантов
    * Если текущий день - рабочий, но рабочее время еще не наступило, то возвращает начало текущего рабочего дня
    * Если текущий день - выходной, или рабочее время уже закончилось, то возвращает начало следующего рабочего дня
    */
   public function getNextWorkDay(int $timestamp = 0){
      
      if($timestamp == 0) $timestamp = time();
      
      $now = getdate($timestamp);
      $hour = (int) $now['hours'];
      $minute = (int) $now['minutes'];
      $curTime = $hour*100+$minute; // 830, 1645, etc.

      $dow = $this->isWorkDay($timestamp);
      
      // сегодня выходной или рабочий день закончился
      if($dow == $this::WEEKEND_DAY || $curTime > $this->minWorkTimes[$dow] ) {
         $timestamp += 24*60*60;
         $dow = $this->isWorkDay($timestamp);
      }
      
      // пока не получим следующий рабочий день
      while ($dow == $this::WEEKEND_DAY){
         $timestamp += 24*60*60;
         $dow = $this->isWorkDay($timestamp);
      }
      
      // время начала рабочего дня
      $hour = intdiv($this->minWorkTimes[$dow], 100);
      $minute = $this->minWorkTimes[$dow] % 100;
      
      return strtotime(sprintf("%02d:%02d",$hour,$minute),$timestamp);
   }
   
   /*
    * Время начала рабочего дня
    */
   public function getWorkDayBegin($timestamp = 0){
      
      if($timestamp == 0) $timestamp = time();
      $dow = $this->isWorkDay($timestamp);
      // время начала рабочего дня
      $hour = intdiv($this->minWorkTimes[$dow], 100);
      $minute = $this->minWorkTimes[$dow] % 100;

      return strtotime(sprintf("%02d:%02d",$hour,$minute),$timestamp);
   }

   /*
    * Время окончания рабочего дня
    */
   public function getWorkDayEnd($timestamp = 0){
      
      if($timestamp == 0) $timestamp = time();
      $dow = $this->isWorkDay($timestamp);
      // время окончания рабочего дня
      $hour = intdiv($this->maxWorkTimes[$dow], 100);
      $minute = $this->maxWorkTimes[$dow] % 100;

      return strtotime(sprintf("%02d:%02d",$hour,$minute),$timestamp);
   }

}