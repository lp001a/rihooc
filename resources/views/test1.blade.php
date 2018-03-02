<!doctype html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test1</title>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            Ｃｆｆff  ５５γγγ≡≡≡   ☆☆☆☆

            <div class="content" id="app">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(value, index) in people">
                            <td v-html="index"></td>
                            <td v-html=""></td>
                            <td v-html=""></td>
                        </tr>
                    </tbody>
                    <button id="btn1">click</button>
                </table>
            </div>
        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    var exp_data = {
        message:'Hello World',
        message2:'hehe',
    }
    var people = {
                people:[{
                    name: 'Jack',
                    age: 30,
                    sex: 'Male'
                }, {
                    name: 'Bill',
                    age: 26,
                    sex: 'Male'
                }, {
                    name: 'Tracy',
                    age: 22,
                    sex: 'Female'
                }, {
                    name: 'Chris',
                    age: 36,
                    sex: 'Male'
                }]
            }
	new Vue({
  		el: '#app',
  		data: people,
	});

$(document).ready(function(){
  $("#btn1").click(function(){
    alert('vue is cool');
  });
});

</script>