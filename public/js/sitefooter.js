


export default{

    props:['showImpressum'],

    template:/* `<footer>
                  <a href="#" v-on:click="showImpressum">Impressum</a>
                  <impressum v-if="impressumVisible"></impressum>
                </footer>`*/
        `<footer>
      <p>Das ist unser Footer.</p>
      <a @click="$emit('update:showImpressum', 'impressum')" href="#">Impressum {{showImpressum}}</a><br>
      <a @click="$emit('update:showImpressum', '')" href="#">Close</a>
      </footer>`
    ,

}

