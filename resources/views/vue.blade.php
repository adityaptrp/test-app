<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <p>Your name : @{{ nama }}</p>
        <form action="">
            <label for="nama">Input Your Name :</label>
            <input type="text" name="nama" @click.prevent="click" v-model="nama" id="nama">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script>
        const app = new Vue({
            el: '#app',
            data() {
                return {
                    nama: 'Dika Putra'
                }
            },
            methods: {
                click() {
                    this.nama = "Clicked!"
                }
            }
        });
    </script>
</body>
</html>