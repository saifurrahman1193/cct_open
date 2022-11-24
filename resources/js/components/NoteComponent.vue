<template>
    <div>

        <div class="card-body">


            <form @submit.prevent="insertNote()">
                <div class="row col-md-8">
                    <div class="col col-md-10 form-group  has-error">
                        <input class="form-control col-md-11" type="text"  name="note" v-model="noteInsertDetails.note" placeholder="Note">
                        <div class="col-md-11 mt-1" v-if="noteInsertDetailsErrors.error==true" v-for="noteError in noteInsertDetailsErrors.note">
                            <div class="alert alert-danger" role="alert">{{ noteError }}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-header">Read, Update & Delete</div>
        <div class="card-body">

            <table class="table table-borderless" id="table">
                <thead class="thead-light">
                    <tr>
                        <th>Note Id</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="note in notes">
                        <td>{{note.noteId}}</td>
                        <td>{{note.note}}</td>
                        <td>
                            <button class="btn btn-warning" @click="editNote(note);" data-toggle="modal" data-target="#noteEditModal">Edit</button>
                            <button class="btn btn-danger" @click="deleteNote(note.noteId)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="modal" tabindex="-1" role="dialog" id="noteEditModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input class="form-control" type="text"  name="noteId" v-model="noteEditDetails.noteId" placeholder="Note">
                        <input class="form-control" type="text"  name="note" v-model="noteEditDetails.note" placeholder="Note">
                        <div class="col-md-11 mt-1" v-if="noteEditDetailsErrors.error==true" v-for="noteError in noteEditDetailsErrors.note">
                            <div class="alert alert-danger" role="alert">{{ noteError }}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="updateNote()">Save changes</button>
                </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    const token = urlParams.get('token')

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger mr-2'
        },
        buttonsStyling: false
    })

    export default {

        mounted() {
            console.log('Component mounted.');
            this.getNotes();
        },
        data() {
            return {
                noteInsertDetails : { note: '' },
                noteInsertDetailsErrors : { error:false, note: '' },
                noteEditDetails : { noteId: '', note: '' },
                noteEditDetailsErrors : { error:false, noteId: '', note: '' },
                notes:[]
                // showModal:false
            }
        },
        methods: {
            insertNote(){

                swalWithBootstrapButtons.fire({
                                                title: 'Are you sure?',
                                                text: "Your data will be added !",
                                                icon: 'info',
                                                showCancelButton: true,
                                                confirmButtonText: 'Save',
                                                cancelButtonText: 'Cancel',
                                                reverseButtons: true
                                            }).then((result) => {

                                                if (result.value) {
                                                    var _this = this;
                                                    console.log(this.noteInsertDetails.note)

                                                    axios.post('/api/insertNote?token='+token,  this.noteInsertDetails)
                                                    .then(function (response) {
                                                        console.log('success !');
                                                        swalWithBootstrapButtons.fire(
                                                                    'Saved!',
                                                                    'Your data has been saved.',
                                                                    'success'
                                                        )

                                                        // Swal.fire('Successfully Added !', '', 'success')

                                                        _this.noteInsertDetails={ note: '' };
                                                        _this.getNotes();
                                                    })
                                                    .catch(function (error) {
                                                        console.log('failure !');
                                                        swalWithBootstrapButtons.fire(
                                                            'Error',
                                                            'Something went wrong.',
                                                            'error'
                                                        )
                                                        console.log(error.response);
                                                        console.log(error.response.data.errors.note);
                                                        // console.log(error.response.data.errors.note);
                                                        _this.noteInsertDetailsErrors = { error:true, note: error.response.data.errors.note };
                                                    })


                                                } else if (
                                                    /* Read more about handling dismissals below */
                                                    result.dismiss === Swal.DismissReason.cancel
                                                ) {
                                                    swalWithBootstrapButtons.fire(
                                                        'Cancelled',
                                                        'Nothing added.',
                                                        'error'
                                                    )
                                                }
                                            });

            },

            getNotes(){
                var _this = this;
                console.log('getNotes called');
                console.log('token = '+token);
                axios.get('/api/getNotes'+'?token='+token)
                .then(function (response) {
                    console.log(response.data.data);
                    _this.notes = response.data.data;
                })
                .catch(function (error) {
                })

            },
            deleteNote(noteId){

                this.noteInsertDetailsErrors.error=false;
                this.noteEditDetailsErrors.error=false;


                swalWithBootstrapButtons.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonText: 'Delete',
                                                cancelButtonText: 'Cancel',
                                                reverseButtons: true
                                            }).then((result) => {
                                                if (result.value) {
                                                    var _this = this;
                                                    console.log('deleteNote called');
                                                    console.log(noteId);
                                                    axios.post('/api/deleteNote/'+noteId+'?token='+token)
                                                    .then(function (response) {
                                                        swalWithBootstrapButtons.fire(
                                                            'Deleted!',
                                                            'Your data has been deleted.',
                                                            'success'
                                                        );
                                                        // Swal.fire('Successfully deleted !', "You won't be able to revert this !", 'success')
                                                        // console.log(response.data.data);
                                                        _this.getNotes();
                                                    })
                                                    .catch(function (error) {
                                                    })


                                                } else if (
                                                    /* Read more about handling dismissals below */
                                                    result.dismiss === Swal.DismissReason.cancel
                                                ) {
                                                    swalWithBootstrapButtons.fire(
                                                        'Cancelled',
                                                        'Your data is safe :)',
                                                        'error'
                                                    );
                                                }
                                            });




            },
            editNote(note){
                console.log(note);
                console.log(note.noteId);
                console.log(note.note);
                this.noteEditDetails={ noteId: '', note: '' };
                this.noteEditDetails={ noteId: note.noteId, note: note.note };
                this.noteInsertDetailsErrors.error=false;
                this.noteEditDetailsErrors.error=false;


            },
            updateNote(){




                swalWithBootstrapButtons.fire({
                                                title: 'Are you sure?',
                                                text: "Your data will be updated !",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonText: 'Update',
                                                cancelButtonText: 'Cancel',
                                                reverseButtons: true
                                            }).then((result) => {

                                                if (result.value) {
                                                    var _this = this;
                                                    console.log(this.noteEditDetails)
                                                    axios.post('/api/updateNote'+'?token='+token,  this.noteEditDetails)
                                                    .then(function (response) {
                                                        swalWithBootstrapButtons.fire(
                                                            'Updated!',
                                                            'Your data has been updated.',
                                                            'success'
                                                        );
                                                        // Swal.fire('Successfully updated !', '', 'success')
                                                        console.log('success !');
                                                        console.log(response.data.noteId);
                                                        _this.getNotes();
                                                    })
                                                    .catch(function (error) {
                                                        swalWithBootstrapButtons.fire(
                                                            'Error',
                                                            'Something went wrong.',
                                                            'error'
                                                        );
                                                        console.log('failure !');
                                                        console.log(error.response);
                                                        console.log(error.response.data.errors.note);
                                                        _this.noteEditDetailsErrors = { error:true, note: error.response.data.errors.note };
                                                    })


                                                } else if (
                                                    /* Read more about handling dismissals below */
                                                    result.dismiss === Swal.DismissReason.cancel
                                                ) {
                                                    swalWithBootstrapButtons.fire(
                                                        'Cancelled',
                                                        'Nothing changed.',
                                                        'error'
                                                    )
                                                }
                                            });

            }


        },

    }
</script>
