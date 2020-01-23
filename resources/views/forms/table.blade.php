@component('../components/header', [
   'title' => 'Retrieve'
])
@endcomponent
<v-card class="mx-5 my-5">
    <v-card-text>
        <v-simple-table >
                <template v-slot:top>
                    <v-toolbar flat color="white">
                        <v-toolbar-title>All Humans</v-toolbar-title>
                        <v-divider
                        class="mx-4"
                        inset
                        vertical
                        ></v-divider>
                        <v-spacer></v-spacer>
                        <v-btn
                        depressed
                        rounded
                        small
                        href="/create"
                        color="danger white--text"
                        >
                        +new
                        </v-btn>
                    </v-toolbar>
                    <hr>
                </template>
            <template v-slot:default>
            <thead>
            <tr>
                <th class="text-left">firstname</th>
                <th class="text-left">middlename</th>
                <th class="text-left">lastname</th>
                <th class="text-left">gender</th>
                <th class="text-left">age</th>
                <th class="text-left">address</th>
                <th class="text-left">action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($humans as $human)
                <tr :key="{{$human->id}}">
                    <td>{{ $human->first_name }}</td>
                    <td>{{ $human->middle_name }}</td>
                    <td>{{ $human->last_name }}</td>
                    <td>{{ $human->gender==1?'Male':'Female' }}</td>
                    <td>{{ $human->age }}</td>
                    <td>{{ $human->address }}</td>
                    <td>
                        <v-btn icon small x-small color="black" href="{{url('/edit' ,$human->id)}}">
                            <v-icon >mdi-pencil</v-icon>
                        </v-btn>
                        <v-btn icon small x-small color="danger" href="{{url('/delete' ,$human->id)}}">
                            <v-icon>mdi-delete</v-icon>
                        </v-btn>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </template>
        </v-simple-table>
    </v-card-text>
</v-card>
@if (session('message'))
    <v-snackbar
        value="true"
        color="success"
        timeout=1000
        class="text-capitalized"
    >
    {{session('message')}}
    </v-snackbar>

    @endif
@component('../components/bottom')
@endcomponent
