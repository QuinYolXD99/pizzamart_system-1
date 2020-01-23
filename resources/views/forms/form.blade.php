@component('../components/header', [
   'title' => 'Form'
])
@endcomponent

@php
    function checkError($errors , $field)
    {
       return  $errors->has($field);
    }

    function checkField($errors,$field){
        if(checkError($errors,$field)){
            return $errors->first($field);
        }
    }
@endphp
<v-row style="height:100%!important">
        <v-col  cols="12"  class="account-form" md="7" sm="7">
            @component('components/Toolbar')
                
            @endcomponent
        </v-col>
        <v-col cols="12" md="5" sm="5">
            <v-container>
                <v-card flat color="transparent" class="px-5 py-5">
                    <v-card-text class="headline">Create new account</v-card-text>
                
                    <v-card-text>
                        <form action="{{url('register')}}" method="POST">
                            @csrf
                        <div>
                            <v-text-field
                            name="first_name"
                            value="{{old('first_name')}}"
                            type="text"
                            :error="{{$errors->any()?$errors->has('first_name')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('first_name')?$errors->first('first_name'):''}}"
                            persistent-hint
                            aria-autocomplete="off"
                            dense
                            label="Firstname"
                            />
                        </div>
                        <br>
                        <div>
                            <v-text-field
                            value="{{old('middle_name')}}"
                            name="middle_name"
                            dense
                            :error="{{$errors->any()?$errors->has('middle_name')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('middle_name')?$errors->first('middle_name'):''}}"
                            aria-autocomplete="off"
                            type="text"
                            label="Middlename"
                            />
                        </div>  
                        <br>
                        <div>
    
                            <v-text-field
                            value="{{old('last_name')}}"
                            name="last_name"
                            aria-autocomplete="off"
                            dense
                            :error="{{$errors->any()?$errors->has('last_name')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('last_name')?$errors->first('last_name'):''}}"
                            type="text"
                            label="Lastname"
                            />
                        </div>  
                        <br>
                        <div>
                            <v-text-field
                            name="age"
                            value="{{old('age')}}"
                            aria-autocomplete="off"
                            dense
                            :error="{{$errors->any()?$errors->has('age')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('age')?$errors->first('age'):''}}"
                            type="number"
                            label="Age"
                            />
                        </div>  
                        <br>
                        <div>
                            <v-text-field
                            value="{{old('address')}}"
                            name="address"
                            aria-autocomplete="off"
                            dense
                            :error="{{$errors->any()?$errors->has('address')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('address')?$errors->first('address'):''}}"
                            type="text"
                            label="Address"
                            />
                        </div>  
                        <br>
                        <div>
                            <v-text-field
                            aria-autocomplete="off"
                            dense
                            value="{{old('email')}}"
                            :error="{{$errors->any()?$errors->has('email')?true:'0':'0'}}"
                            error-messages ="{{$errors->has('email')?$errors->first('email'):''}}"
                            name="email"
                            type="Email"
                            label="email"
                            />
                        </div>
                        <br>
                        <div>
                            <label for="Gender">Gender</label>
                            <v-radio-group 
                                name="gender" 
                                dense
                                row
                                :error="{{$errors->any()?$errors->has('gender')?true:'0':'0'}}"
                                error-messages ="{{$errors->has('gender')?$errors->first('gender'):''}}">
                                @for ($i =1 ; $i <=2 ; $i++)
                                    <v-radio
                                    name="gender"
                                    dense
                                    key="{{$i}}"
                                    label="{{$i==1?'male':'female'}}"
                                    value="{{$i}}"
                                ></v-radio>
                                @endfor
                                
                            </v-radio-group>
                        </div>
                        
                    </v-card-text>
                    <v-card-actions>
                    <v-spacer />
                    <v-btn width="100%" type="submit"  large depressed color="primary" >register</v-btn>
                    </v-card-actions>
                    </form>
                </v-card>
            </v-container>
        </v-col>
    </v-row>


                  
@component('../components/bottom')
@endcomponent