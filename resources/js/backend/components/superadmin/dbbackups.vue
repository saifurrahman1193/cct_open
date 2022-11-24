<template>
    <div>
        <v-sheet
            class=" ma-2"
            elevation="0"
            color="grey lighten-5"
        >

            <v-content>
                <v-card elevation="2" >
                    <v-card-title primary-title >
                        <v-spacer></v-spacer>
                        DB Backup
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>

                            <v-col  cols="auto" >
                                <v-btn @click="axiosPost('/api/dbBackupDelete')"
                                        class="mx-0 mr-2"
                                        target="_blank"
                                        >
                                    <v-icon  class="mr-2">delete</v-icon>
                                    DB Backup Delete
                                </v-btn>
                            </v-col>

                            <v-col  cols="auto" >
                                 <v-btn @click="axiosPost('/api/serverDBBackup')"
                                        class="mx-0 mr-2"
                                        target="_blank"
                                        >
                                    <v-icon  class="mr-2">note_add</v-icon>
                                    DB Backup Generate
                                </v-btn>
                            </v-col>

                            <v-col  cols="auto" >
                                <v-btn href="/server_db_backup.sql"
                                        class="mx-0 mr-2 text-decoration-none"
                                        target="_blank"
                                        >
                                    <v-icon  class="mr-2">cloud_download</v-icon>
                                    DB Backup Download
                                </v-btn>
                            </v-col>

                            
                        </v-row>

                      

                    </v-card-text>
                </v-card>
            </v-content>

        </v-sheet>

        
    </div>
</template>


<script>

    export default {
        components:{
            
        },
        data() {
            return {
                token: localStorage.getItem('token')
            }
        },
    }
</script>
