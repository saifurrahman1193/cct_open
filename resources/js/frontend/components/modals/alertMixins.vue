<script>
    export default {
        data() {
            return {
                s_alert:false,
                e_alert:false,
                w_alert:false,
                i_alert:false,

                addingConfirmed:'',
                editingId:'',
                deletingId:'',

                dialog_crud: false,

            }
        },
        methods: {
            cancelAlert(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;
                this.i_alert=false;

                this.addingConfirmed='';
                this.deletingId='';

            },
            close(){
                this.dialog_crud = false
                this.editingId=''
                this.clearForm()
                this.deletingId=''
                this.addingConfirmed=''
            },

            crudConfirm(){
                if (this.editingId)
                {
                    this.editingConfirm()
                }
                else
                {
                    this.addingConfirm()
                }
            },

            addingConfirm(){
                this.w_alert = true
                this.addingConfirmed = 1
            },

            deleteConfirm(id){
                console.log('here..........'+id)
                this.w_alert = true
                this.deletingId = id
            },

            editDialog(id){
                this.editingId=id
                this.dialog_crud = true
                this.setEditDialogFields(id)
            },
            editingConfirm(id){
                this.w_alert = true
            },

            cancelAlertAndProceed(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;

                if (this.addingConfirmed)
                {
                    this.adding()
                }
                else if (this.editingId)
                {
                    this.editing()
                }
                else if (this.deletingId)
                {
                    this.deleting()
                }
                this.i_alert=false;
            }

        },
    }
</script>
