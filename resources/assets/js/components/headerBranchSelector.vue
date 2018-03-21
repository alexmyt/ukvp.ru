<template>
      <div class="dropdown d-flex justify-content-end flex-column border-left pl-2">
         <select v-model="selected_branch" @input="updateInitialBranch($event.target.value)" id="navbarRegionSelect" class="form-control form-control-sm border-0">
            <option v-for="branch in branches" :value=branch.value >{{ branch.text }}</option>
         </select>
         <a :href="phoneURI" class="text-center"><span id="navbarPhone" class="mx-auto"><small>{{ phoneCode }} </small>{{ phoneLocal }}</span></a>
         <small id="navbarAddress" class="mx-auto">{{ addr }}</small>
      </div>
</template>

<script>
   export default{
         props: {
                  initialBranch: {
                           type: String,
                           default: function(){
                                    return this.$cookies.get('initialBranch') || '0';
                           }
                  }
         },
         data: function()
         {
                  return{
                           selected_branch: this.initialBranch,
                           branches: [
                                    {text: 'г.Урюпинск', value: '0', phone: '+78444241640', phoneCode: '8-(84442)', phoneLocal: '4-16-40', addr: 'ул.Пушкина, 11'},
                                    {text: 'р.п.Новониколаевский', value: '1', phone: '+78444461467', phoneCode: '8-(84444)', phoneLocal: '6-14-67', addr: 'ул.Народная, 120'},
                                    {text: 'ст.Нехаевская', value: '2', phone: '+78444351994', phoneCode: '8-(84443)', phoneLocal: '5-19-94', addr: 'ул.Победы, 20'},
                                    {text: 'г.Волжский', value: '3', phone: '+78443513333', phoneCode: '8-(8443)', phoneLocal: '51-33-33', addr: 'ул.87 Гвардейская, 37'},
                                    {text: 'г.Борисоглебск', value: '4', phone: '+74735461129', phoneCode: '8-(47354)', phoneLocal: '6-11-29', addr: 'ул.Советская, 49, оф.7'},
                                    {text: 'р.п.Средняя Ахтуба', value: '5', phone: '+78447954306', phoneCode: '8-(84479)', phoneLocal: '5-43-06', addr: 'ул.Свердлова, 35А'},
                                    {text: 'г.Краснослободск', value: '6', phone: '+78447955167', phoneCode: '8-(84479)', phoneLocal: '5-51-67', addr: 'ул.Садовая, 6А, оф.6'},
                           ]
                  };
         },
         computed:{
                  phoneCode(){
                           return this.branches[this.selected_branch].phoneCode;
                  },
                  phoneLocal(){
                           return this.branches[this.selected_branch].phoneLocal;
                  },
                  phoneURI(){
                           return 'tel:' + this.branches[this.selected_branch].phone;
                  },
                  addr(){
                           return this.branches[this.selected_branch].addr;
                  }
         },
         
         methods:{
                  updateInitialBranch: function (branch){
                           this.$cookies.set('initialBranch',branch,'1y');
                           this.$emit('input', branch);
                  }
         }
         
   }
</script>