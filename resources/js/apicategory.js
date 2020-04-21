const apicategory = new Vue({
    el: '#api',
    data: {
        nombre : 'Jackson',
        slug: '',
        mensajeSlug: 'Slug Existe',
        classSlug: 'alert alert-danger',
        aparecerSlug: false,
        descripcion: 'holaaaa',
        btnGuardar : false
    },
    computed: {
        generarSlug(){
            var char= {
                "á":"a","é":"e","í":"i","ó":"o","ú":"u",
                "Á":"A","É":"E","Í":"I","Ó":"O","Ú":"U",
                "ñ":"n","Ñ":"N"," ":"-","_":"-"
            }
            var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;

            this.slug = this.nombre.trim().replace(expr, function(e){
                return char[e]
            }).toLowerCase()
        //    return this.nombre.trim().replace(/ /g, '-') ;
            return this.slug;
        }
    },
    methods: {
        getCategory(){
            let url = '/api/category/'+this.slug;

            axios.get(url).then(response => {
                this.mensajeSlug = response.data;
                console.log(this.mensajeSlug);
                
                if(this.mensajeSlug == 'Slug disponible'){
                    this.classSlug = 'alert alert-success';
                    this.btnGuardar = false;
                }else{
                    this.classSlug = 'alert alert-danger';
                    this.btnGuardar = true;
                }

                this.aparecerSlug = true;

            });

        }
    }
});