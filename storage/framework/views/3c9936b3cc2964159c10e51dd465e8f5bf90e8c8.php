<script>
    let pagination = new Vue({
        el: '#pagination',
        data: {
            currPage: 1,
            lastPage: null,
            notes: null,
            saved: false,
        },
        methods: {
            async getPage(num) {
                let response = await fetch('/pages/?page='+num);
                let data = await response.json();
                this.currPage = num;
                this.lastPage = data.last_page;
                this.notes = data.data;
            },

            async postNote() {
                let form = document.forms[0];
                let response = await fetch('/', {
                    method: 'POST',
                    body: new FormData(form)
                });
                // let errors = await response.json(); //похоже, что в response попадает редирект
                // console.log(response); //не работает. Как получить сообщения об ошибках?
                this.saved = await response.text() == 1; 
                this.getPage(1);
            }
        },
        filters: {
            formatDate(date) {
                date = date.split('T');
                let day = date[0].split('-');
                let time = date[1].split(':');
                return `${day[2]}.${day[1]}.${day[0]} ${time[0]}:${time[1]}`;
            }
        }
    });
    pagination.getPage(1);
</script><?php /**PATH /var/www/html/guestbook (laravel)/resources/views/message/vuejs.blade.php ENDPATH**/ ?>