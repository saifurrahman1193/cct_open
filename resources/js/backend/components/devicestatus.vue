<template>
    <div>


        <v-list>
            <v-list-item>
                <v-chip color="orange" outlined
                    @click="checkDeviceConnectivity()"
                    v-if=" !isProcessing"
                > Connect</v-chip>
                <v-chip color="orange" outlined
                    v-if="isProcessing"
                >  Processing &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>
                <v-chip color="success" dark
                    v-if="isConnected"
                > Connected</v-chip>
                <v-chip color="pink" dark
                    v-if="isDisconnected"
                > Can't connect! Network Error!</v-chip>
            </v-list-item>

            <v-list-item v-if="isConnected && !isProcessing">

                <v-chip color="orange" outlined
                    @click="syncDevice()"
                    v-if="!isSyncProcessing"
                > Sync</v-chip>

                <v-chip color="orange" outlined
                    v-if="isSyncProcessing"
                >  Syncing... &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>

                <v-chip color="success" dark
                    v-if="isSyncSuccess"
                > Sync Successful</v-chip>

                <v-chip color="pink" dark
                    v-if="isSyncFail"
                > Sync Failure</v-chip>

            </v-list-item>

            <v-list-item v-if="isConnected && !isProcessing && !isSyncProcessing" >

                <v-chip color="orange" outlined
                    @click="clearAdmin()"
                    v-if="!isClearAdminProcessing"
                > Clear Admin</v-chip>

                <v-chip color="orange" outlined
                    v-if="isClearAdminProcessing"
                >  Clearing Admin... &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>

                <v-chip color="success" dark
                    v-if="isClearingAdminSuccess"
                > Clearing Admin Successful</v-chip>

                <v-chip color="pink" dark
                    v-if="isClearingAdminFail"
                > Clearing Admin Failure</v-chip>

            </v-list-item>


            <v-list-item v-if="isConnected && !isProcessing && !isSyncProcessing && !isClearAdminProcessing">

                <v-chip color="orange" outlined
                    @click="setDeviceTimeNow()"
                    v-if="!isDeviceTimeSetProcessing"
                > Set Device Time As Now</v-chip>

                <v-chip color="orange" outlined
                    v-if="isDeviceTimeSetProcessing"
                >  Setting Device Time... &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>

                <v-chip color="success" dark
                    v-if="isDeviceTimeSetSuccess"
                > Setting Device Successful</v-chip>

                <v-chip color="pink" dark
                    v-if="isDeviceTimeSetingFail"
                > Setting Device Failure</v-chip>

            </v-list-item>


            <v-list-item v-if="isConnected && !isProcessing">

                <v-chip color="orange" outlined
                    @click="resetDevice()"
                    v-if="!isResetDeviceProcessing"
                > Reset Device</v-chip>

                <v-chip color="orange" outlined
                    v-if="isResetDeviceProcessing"
                >  Resetting Device... &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>

                <v-chip color="success" dark
                    v-if="isResetDeviceSuccess"
                > Reset Device Successful</v-chip>

                <v-chip color="pink" dark
                    v-if="isResetDeviceFail"
                > Reset Device Failure</v-chip>

            </v-list-item>


            <!-- <v-list-item v-if="isConnected && !isProcessing && !isSyncProcessing && !isClearAdminProcessing">

                <v-chip color="orange" outlined
                    @click="deviceRestart()"
                    v-if="!isDeviceRestartProcessing"
                > Restart Device</v-chip>

                <v-chip color="orange" outlined
                    v-if="isDeviceRestartProcessing"
                >  Restarting Device ... &nbsp;
                    <v-progress-circular
                        indeterminate
                        color="orange"
                        size="20"
                    ></v-progress-circular>
                </v-chip>

                <v-chip color="success" dark
                    v-if="isDeviceRestartSuccess"
                > Restarting Device Successful</v-chip>

                <v-chip color="pink" dark
                    v-if="isDeviceRestartingFail"
                > Restarting Device Failure</v-chip>

            </v-list-item> -->




        </v-list>
    </div>
</template>

<script>
export default {
    data() {
        return {
            token:localStorage.getItem('token'),
            isConnected: false,
            isProcessing: false,
            isDisconnected: false,

            // sync
            isSyncProcessing: false,
            isSyncSuccess: false,
            isSyncFail: false,

            // ClearAdmin
            isClearAdminProcessing: false,
            isClearingAdminSuccess: false,
            isClearingAdminFail: false,

            // set device time
            isDeviceTimeSetProcessing: false,
            isDeviceTimeSetSuccess: false,
            isDeviceTimeSetingFail: false,

            //  device restart
            isDeviceRestartProcessing: false,
            isDeviceRestartSuccess: false,
            isDeviceRestartingFail: false,

             //  reset device
            isResetDeviceProcessing: false,
            isResetDeviceSuccess: false,
            isResetDeviceFail: false,

        }
    },
    props: [ "device"],
    created() {
        // this.interval = setInterval(() => this.checkDeviceConnectivity(), 30000);
    },
    methods: {

        checkDeviceConnectivity(){
            this.isProcessing=true
            // var device = this.devices.filter( (device) => {
            //     return device.deviceId==deviceId
            // })[0]
            console.log(this.device)

            var _this = this

            // axios.defaults.timeout = 10000

            axios.post('/api/checkDeviceConnectivity'+'?token='+this.token, this.device)
            .then(function (response) {
                _this.isProcessing=false
                _this.isConnected=true
                _this.isDisconnected=false

                console.log(response.data)

                // _this.device=response.data.device
                // __this.device = response.data.data;
                _this.$emit('deviceDataUpdate')
            })
            .catch(function (error) {
                _this.isProcessing=false
                _this.isConnected=false
                _this.isDisconnected=true
                _this.$emit('deviceDataUpdate')
            })
        },
        syncDevice(){

            this.isSyncProcessing = true
            var _this = this

            console.log("later will be added")

            axios.post('/api/syncDevice'+'?token='+this.token, this.device)
            .then(function (response) {
                _this.isSyncProcessing=false
                _this.isSyncSuccess=true
                _this.isSyncFail=false
                _this.$emit('deviceDataUpdate')
            })
            .catch(function (error) {
                _this.isSyncProcessing=false
                _this.isSyncSuccess=false
                _this.isSyncFail=true
                _this.$emit('deviceDataUpdate')
            })
        },

        clearAdmin(){
            this.isClearAdminProcessing = true
            var _this = this

            axios.post('/api/clearAdmin'+'?token='+this.token, this.device)
            .then(function (response) {
                _this.isClearAdminProcessing=false
                _this.isClearingAdminSuccess=true
                _this.isClearingAdminFail=false
            })
            .catch(function (error) {
                _this.isClearAdminProcessing=false
                _this.isClearingAdminSuccess=false
                _this.isClearingAdminFail=true
            })
        },


        setDeviceTimeNow(){
            this.isDeviceTimeSetProcessing = true
            var _this = this

            axios.post('/api/setDeviceTimeNow'+'?token='+this.token, this.device)
            .then(function (response) {
                _this.isDeviceTimeSetProcessing=false
                _this.isDeviceTimeSetSuccess=true
                _this.isDeviceTimeSetingFail=false
            })
            .catch(function (error) {
                _this.isDeviceTimeSetProcessing=false
                _this.isDeviceTimeSetSuccess=false
                _this.isDeviceTimeSetingFail=true
            })
        },


        deviceRestart(){
            this.isDeviceRestartProcessing = true
            var _this = this

            axios.post('/api/deviceRestart'+'?token='+this.token, this.device)
            .then(function (response) {
                _this.isDeviceRestartProcessing=false
                _this.isDeviceRestartSuccess=true
                _this.isDeviceRestartingFail=false
            })
            .catch(function (error) {
                _this.isDeviceRestartProcessing=false
                _this.isDeviceRestartSuccess=false
                _this.isDeviceRestartingFail=true
            })
        },


        resetDevice(){
            if (confirm("Do you really want to reset device? All data in this device will be lost!")) {
                this.isResetDeviceProcessing = true
                var _this = this

                axios.post('/api/resetDevice'+'?token='+this.token, this.device)
                .then(function (response) {
                    _this.isResetDeviceProcessing=false
                    _this.isResetDeviceSuccess=true
                    _this.isResetDeviceFail=false
                })
                .catch(function (error) {
                    _this.isResetDeviceProcessing=false
                    _this.isResetDeviceSuccess=false
                    _this.isResetDeviceFail=true
                })

            }
        },



        // cartIsShippingUpdate(){
        //     var _this=this
        //     axios.post('/api/cartUpdate?token='+this.token,
        //         {
        //             'cartId':this.cart.cartId,
        //             'isShipping': (this.cart.isShipping==1?0:1),
        //         }
        //     )
        //     .then(function (response) {
        //         _this.$emit('reloadData')
        //     })
        //     .catch(function (error) {
        //     })
        // },
        // cartIsPaymentCompleteUpdate(){
        //     var _this=this
        //     axios.post('/api/cartUpdate?token='+this.token,
        //         {
        //             'cartId':this.cart.cartId,
        //             'isPaymentComplete': (this.cart.isPaymentComplete==1?0:1),
        //         }
        //     )
        //     .then(function (response) {
        //         _this.$emit('reloadData')
        //     })
        //     .catch(function (error) {
        //     })
        // },
        // cartIsDeliveryCompleteUpdate(){
        //     var _this=this
        //     axios.post('/api/cartUpdate?token='+this.token,
        //         {
        //             'cartId':this.cart.cartId,
        //             'isDeliveryComplete': (this.cart.isDeliveryComplete==1?0:1),
        //         }
        //     )
        //     .then(function (response) {
        //         _this.$emit('reloadData')
        //     })
        //     .catch(function (error) {
        //     })
        // },


    },

}
</script>
