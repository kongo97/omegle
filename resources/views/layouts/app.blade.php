<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <!-- vue.js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
        <!-- vuetify.js -->
        <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
        <!-- axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <title>Omegle - {{$title}}</title>
    </head>
    <body>

            @include('navbar')
 
            <div id="app">
                <v-app>
                    <v-main>
                        <v-container>
                            @include($page)
                        </v-container>
                    </v-main>
                </v-app>
            </div>

            @yield('vue')


            @include('footer')

        @include('scripts')
        
    </body>
</html>