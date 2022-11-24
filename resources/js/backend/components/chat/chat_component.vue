<template>
    <div>
        <v-content>

            <v-container
                class="fill-height pa-0 "
                >
                <v-row class="no-gutters elevation-4">
                    <v-col
                    cols="12" sm="3"
                    class="flex-grow-1 flex-shrink-0"
                    style="border-right: 1px solid #0000001f;"
                    >
                    <v-responsive
                        class="overflow-y-auto fill-height"
                        :height="`${isFrontend? windowHeight-100 : windowHeight-70}`"
                    >
                        <v-list subheader>
                            <v-list-item-group >
                                <template v-for="item in contacts">
                                    <v-list-item
                                        :key="item.id"
                                        :value="item.id"
                                        @click="getAContactMessages(item.id)"
                                    >
                                        <v-list-item-avatar color="grey lighten-1 white--text" dark>
                                            <!-- <v-icon>
                                                chat_bubble
                                            </v-icon> -->
                                            <!-- photoPath -->
                                            <v-icon   v-if="!item.photoPath">person</v-icon>
                                            <v-img :src="item.photoPath||''"  :alt="((item.name).match(/\b(\w)/g)).join('')"  v-else/>
                                        </v-list-item-avatar>
                                        <v-list-item-content>
                                            <v-list-item-title v-text="item.name" ></v-list-item-title>
                                            <v-list-item-subtitle>
                                                {{item.email}}
                                            </v-list-item-subtitle>
                                        </v-list-item-content>
                                        <v-list-item-icon>
                                        <v-icon  dark v-if="item.id==selectedcontact.id" color="info">
                                            chat
                                        </v-icon>
                                        </v-list-item-icon>
                                    </v-list-item>
                                    <v-divider
                                        :key="`chatDivider${item.id}`"
                                        class="my-0"
                                    >
                                    </v-divider>
                                </template>
                            </v-list-item-group>
                        </v-list>
                    </v-responsive>
                    </v-col>
                    <v-col
                    cols="auto"
                    class="flex-grow-1 flex-shrink-0"
                    >
                    <v-responsive
                        class="overflow-y-hidden fill-height"
                        :height="`${isFrontend? windowHeight-100 : windowHeight-70}`"
                    >
                        <v-card
                        flat
                        class="d-flex flex-column fill-height"
                        >
                        <v-card-title>
                            <v-spacer></v-spacer>
                            {{selectedcontact.name}}
                        </v-card-title>
                        <v-card-text class="flex-grow-1 overflow-y-auto" id="scroll-target">
                            <v-list dense id="scrolled-content">
                                <v-list-item
                                    v-for="(item, i) in messages"
                                    :key="i"
                                    dense

                                >

                                    <!-- another user -->
                                    <v-list-item-avatar v-if="item.senderId == selectedcontact.id ">
                                        <v-icon  v-if="!item.senderPhotoPath">person</v-icon>
                                        <v-img :src="item.senderPhotoPath||''"  :alt="((item.receiver).match(/\b(\w)/g)).join('')" v-if="item.senderPhotoPath"/>
                                    </v-list-item-avatar>

                                    <v-list-item-content>
                                            <v-card color="white" class="pa-2" elevation="0" :class="(item.senderId == userInfo.id)?'text-right':''">
                                                {{item.message}}
                                                <h6 style="font-size:10px; color:#00000094;">{{datetimeprocessing(item.created_at)}}</h6>
                                            </v-card>
                                    </v-list-item-content>


                                    <!-- me -->
                                    <v-list-item-avatar v-if=" item.senderId == userInfo.id " >
                                        <v-icon   v-if="!item.senderPhotoPath">person</v-icon>
                                        <v-img :src="item.senderPhotoPath||''"  :alt="((item.sender).match(/\b(\w)/g)).join('')"  v-if="item.senderPhotoPath"/>
                                    </v-list-item-avatar>

                                    <v-spacer v-if=" item.senderId == selectedcontact.id "></v-spacer>





                                </v-list-item>
                            </v-list>
                        </v-card-text>


                        <v-card-text class="flex-shrink-1" v-if="selectedcontact.id">

                            <v-textarea
                            label="Message"
                            v-model="sendmessage"
                            auto-grow  outlined  rows="1"
                            counter
                            clearable
                            append-outer-icon="send"
                            @click:append-outer="sendMessage()"
                            @keyup.enter="sendMessage()"
                            ></v-textarea>

                        </v-card-text>
                        </v-card>
                    </v-responsive>
                    </v-col>
                </v-row>
            </v-container>

        </v-content>
    </div>




</template>


<script>
    import { mapState } from 'vuex'
    import commonMethodMixin from "./../../../mixins/common.vue";


    export default {
        components:{
        },
        mounted() {

            setTimeout(() => {
                this.listen()
            }, 2000)

        },
        mixins: [commonMethodMixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                messages:[],
                selectedcontact:{},
                sendmessage:'',

            }
        },
        props: ["contacts"],
        methods: {

            getAContactMessages(userId){
                this.getSelectedContact(userId)

                var _this = this;
                axios.get('/api/getAContactMessages/'+userId+'/'+this.userInfo.id+'?token='+ _this.token)
                .then(function (response) {
                    _this.messages = response.data.data;
                    _this.goToBottom()
                })
                .catch(function (error) {
                })
            },
            getSelectedContact(userId){
                this.selectedcontact = this.contacts.filter(function(contact){
                    return contact.id == userId
                })[0]
            },
            sendMessage(){
                if ((this.sendmessage||'').length>0) {
                    var _this = this;
                    axios.post('/api/sendMessage'+'?token='+ _this.token, {
                        senderId:   this.userInfo.id,
                        receiverId: this.selectedcontact.id,
                        message: this.sendmessage,
                    })
                    .then(function (response) {
                        _this.sendmessage = ''
                        _this.getAContactMessages(_this.selectedcontact.id)
                    })
                    .catch(function (error) {
                    })
                }
            },
            goToBottom(){
                setTimeout(() => {
                    this.elem = document.getElementById ( "scrolled-content" )
                    this.container = document.getElementById ( "scroll-target" )
                    this.container.scrollTop = Math.floor ( this.elem.offsetHeight )
                    console.log('called')
                }, 2000)
            },
            listen(){
                console.log('this.userInfo.id = '+ this.userInfo.id)
                var _this = this
                Echo.private(`messages.${this.userInfo.id}`)
                .listen('NewMessage', (e) => {
                    console.log('listened')
                    if (e.message.senderId==_this.selectedcontact.id) {
                        console.log(e.message)
                        _this.messages.push(e.message)
                        _this.goToBottom()
                    }
                })
                // Echo.channel(`messages`)
                // .listen('NewMessage', (e) => {
                //     console.log('listened')
                //     _this.messages.push(e.message)
                // })
            }


        },
        computed: {
            ...mapState([
                'userInfo',
            ]),

        },

    }
</script>

