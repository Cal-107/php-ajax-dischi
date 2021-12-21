const app = new Vue ({
    el: '#root',
    data: {
        discs: null,
    },
    created() {
        this.getDisc();
    },
    methods: {
        getDisc() {
            axios
                .get('http://localhost:8888/php-ajax-dischi/Ex-Ajax/scripts/database.php')

                .then(response => {
                    this.discs = response.data
                })

                .catch(err => {
                    console.log(err);
                });
        }
    }
})