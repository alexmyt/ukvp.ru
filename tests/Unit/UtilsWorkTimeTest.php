<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use ukvp\Utils;

class UtilsWorkTimeTest extends TestCase
{

	public function test_isWorkDay(){
		$utils = new Utils;

		$timestamp = mktime(9,0,0,6,5,2018);
		$result = $utils->isWorkDay($timestamp);
		$this->assertEquals(Utils::WORK_DAY,$result,"05.06.2018 (вт) Ошибочно определено как нерабочий день");

		$timestamp = mktime(10,0,0,6,3,2018);
		$result = $utils->isWorkDay($timestamp);
		$this->assertEquals(Utils::WEEKEND_DAY, $result,"03.06.2018 10:00 (вс) Ошибочно определен как рабочий день");

		$timestamp = mktime(10,0,0,6,2,2018);
		$result = $utils->isWorkDay($timestamp);
		$this->assertEquals(Utils::WORK_SATURDAY_DAY, $result,"02.06.2018 10:00 (вс) Ошибочно определен как рабочий день");
		
	}
	
    public function test_isWorkTime()
    {
		$utils = new Utils;

		$timestamp = mktime(9,52,0,6,6,2018);
		$result = $utils->isWorkTime($timestamp);
		$this->assertEquals(true,$result,"06.06.2018 9:50 Ошибочно определено как нерабочее время");

		$timestamp = mktime(7,0,0,6,5,2018);
		$result = $utils->isWorkTime($timestamp);
		$this->assertEquals(false,$result,"05.06.2018 7:00 Ошибочно определено как рабочее время");

		$timestamp = mktime(10,0,0,6,3,2018);
		$result = $utils->isWorkTime($timestamp);
		$this->assertEquals(false,$result,"03.06.2018 10:00 (вс) Ошибочно определено как рабочее время");

		$timestamp = mktime(13,0,0,6,9,2018);
		$result = $utils->isWorkTime($timestamp);
		$this->assertEquals(false,$result,"09.06.2018 13:00 (сб) Ошибочно определено как рабочее время");
    }
	 
	 public function test_getNextWorkDay(){
		$utils = new Utils;

		// середина рабочего дня. ожидаем начало следующего.
		$timestamp = mktime(9,52,0,6,6,2018);
		$result = $utils->getNextWorkDay($timestamp);
		$expected = mktime(8,30,0,6,7,2018);
		$this->assertEquals($expected,$result,sprintf("Ожидали: %s Получили: %s", strftime("%c",$expected), strftime("%c",$result)));

		// до начала рабочего дня. ожидаем начало текущего.
		$timestamp = mktime(7,30,0,6,6,2018);
		$result = $utils->getNextWorkDay($timestamp);
		$expected = mktime(8,30,0,6,6,2018);
		$this->assertEquals($expected,$result,sprintf("Ожидали: %s Получили: %s", strftime("%c",$expected), strftime("%c",$result)));

		// после конца рабочего дня. ожидаем начало следующего.
		$timestamp = mktime(17,52,0,6,6,2018);
		$result = $utils->getNextWorkDay($timestamp);
		$expected = mktime(8,30,0,6,7,2018);
		$this->assertEquals($expected,$result,sprintf("Ожидали: %s Получили: %s", strftime("%c",$expected), strftime("%c",$result)));

		// середина субботы. ожидаем начало следующего понедельника.
		$timestamp = mktime(9,52,0,6,9,2018);
		$result = $utils->getNextWorkDay($timestamp);
		$expected = mktime(8,30,0,6,11,2018);
		$this->assertEquals($expected,$result,sprintf("Ожидали: %s Получили: %s", strftime("%c",$expected), strftime("%c",$result)));
		
	 }
}
