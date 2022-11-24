<template>
    <div>
        <!-- success alert -->
        <v-dialog  max-width="400px"  scrollable  v-model="s_alert"  persistent   @keydown.enter="$emit('cancelAlert')" @keydown.esc="$emit('cancelAlert')">
            <v-card>
                <v-card-title class="green grey--text  text--lighten-5" >
                       
                    Success
                    <v-spacer></v-spacer>      
                    <v-btn class="mx-1 white" icon  color="green"  size="8px">
                        <v-icon>done</v-icon>
                    </v-btn> 
                </v-card-title>
                <v-card-text >
                    <p class="pt-5 pl-2">{{s_msg}}</p>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions >
                    <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="$emit('cancelAlert')">Ok</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> 


        <!-- error alert -->
        <v-dialog  max-width="400px"  scrollable  v-model="e_alert"  persistent   @keydown.enter="$emit('cancelAlert')"  @keydown.esc="$emit('cancelAlert')">
            <v-card>
                <v-card-title class="red lighten-1 grey--text  text--lighten-5" >
                    Error
                    <v-spacer></v-spacer>      
                    <v-icon color="white">warning</v-icon>
                </v-card-title>
                <v-card-text >
                    <p class="pt-5 pl-2">{{e_msg}}</p>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions >
                    <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="$emit('cancelAlert')">Ok</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> 

        <!-- warning alert -->
        <v-dialog  max-width="400px"  scrollable  v-model="w_alert"  persistent  @keydown.enter="$emit('cancelAlertAndProceed')"    >
            <v-card>
                <v-card-title class="orange grey--text  text--lighten-5" >
                    Warning
                    <v-spacer></v-spacer>      
                    <v-icon color="white">error_outline</v-icon>
                </v-card-title>
                <v-card-text >
                    <p class="pt-5 pl-2">{{w_msg}}</p>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions >
                    <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="$emit('cancelAlert')">Cancel</v-btn>
                <v-btn color="success white--text" @click="$emit('cancelAlertAndProceed')">Proceed</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> 

        <!-- info alert -->
        <v-dialog  max-width="400px"  scrollable  v-model="i_alert"  persistent   @keydown.enter="$emit('cancelAlert')"  @keydown.esc="$emit('cancelAlert')">
            <v-card>
                <v-card-title class="primary grey--text  text--lighten-5" >
                    Information
                    <v-spacer></v-spacer>      
                    <v-icon color="white">info</v-icon>
                </v-card-title>
                <v-card-text >
                    <p class="pt-5 pl-2">{{i_msg}}</p>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions >
                    <v-spacer></v-spacer>
                <v-btn color="blue" text @click="$emit('cancelAlert')">Ok</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> 


    </div>
</template>

<script>
export default {
    props:[
        's_msg',
        'e_msg',
        'w_msg',
        'i_msg',
        's_alert',
        'e_alert',
        'w_alert',
        'i_alert',

    ],
}
</script>





<!--

// ----------------documents----------------------
// ----------------documents----------------------



<script>
    import modal_alert from './modals/alert.vue'

    export default {
        components:{
             modal_alert
        },

        data() {
            return {
                s_alert:false,
                e_alert:false,
                w_alert:false,
                i_alert:false,
            }
        },
        methods: {
            changePasswordPostConfirm(){

                this.w_alert = true
            },
            changePasswordPost(){   
               
                var _this = this;
                axios.post('/api/auth/changePassword?token='+localStorage.getItem('token'),  this.changePasswordDetails)
                .then(function (response) {
                    console.log('success !');
                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    
                })
            },
            cancelAlert(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;
                this.i_alert=false;
            },
            cancelAlertAndProceed(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;
                this.i_alert=false;
                this.changePasswordPost()
            }
        },
        
    }
</script>

-->