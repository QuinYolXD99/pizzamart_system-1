<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ooops!Page Not Found</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="/css/style.css">


</head>

<body>
    <div id="app">  
        <v-app >
            <v-content>
                <v-container
                    style="padding:0"
                    class="fill-height"
                    fluid
                >
                    <v-row
                    align="center"
                    justify="center"
                    style="height:100%!important"
                    >
                    <v-col
                        cols="12"
                        md="7"
                        class="account-form"
                    >
                  
                        </v-col>
                        <v-col
                        cols="12"
                        md="5"
                      >
                      <div class="text-center display-2 font-weight-light">
                         <span><h1>Ooops!</h1></span><br>
                         Page not Found
                         <br>
                         <br>
                         <v-btn
                            class='my-3'
                            large
                            href="/pizzamart/"
                            color="danger white--text"
                        >
                        Back to home
                        </v-btn>
                      </div>
                      
                      
                   
                       </v-col>
                    </v-row>
                </v-container>
            </v-content>
        </v-app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>