
import sitefooter from "/js/sitefooter.js";
import impressum from "/js/impressum.js";

export default {
  data(){
       return {
           //impressumVisible:false
       }
   },
/*methods:{
   /* owImpressum(){
        this.impressumVisible=!this.impressumVisible;
    }
}
props:['showImpressum'],
components: {
    sitefooter,
    impressum

},*/
template:/*`<div v-if="showImpressum === 'impressum'">
        <impressum v-if="showImpressum === 'impressum'"></impressum>
        <impressum></impressum>
</div>
<div v-else>
  <p>Das ist der Body</p>
</div>
<div>

</div>`*/
    `<sitebody></sitebody>`
}


