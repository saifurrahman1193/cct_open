
<script>
    import { mapState, mapGetters } from 'vuex'
    export default {
        data() {
            return {
                compareList: (localStorage.getItem('compareList') ? JSON.parse(localStorage.getItem('compareList')) : [])
            }
        },
        computed: {
             ...mapState([
            ]),
            ...mapGetters([
                'getCompareList'
            ])
        },
        methods: {
            addToCompareList(productId){
                this.compareList = this.getCompareList;
                if(! this.compareList.includes(productId))
                {
                    // this.compareList.push(productId);
                    this.$store.commit('ADD_TO_COMPARELIST', productId)
                    // this.compareList = this.getCompareList
                    localStorage.setItem("compareList", JSON.stringify(this.compareList));
                    this.addComparelist(productId)
                }
            },
            removeFromCompareList(productId){
                this.compareList = this.getCompareList;
                this.compareList = this.compareList.filter(function(compareProductId){
                    return compareProductId != productId
                })

                this.$store.commit('REMOVE_FROM_COMPARELIST', productId)
                localStorage.setItem("compareList", JSON.stringify(this.compareList));
            },
            isAddedToCompare(productId) {
                var isAdded = 0;
                var _this = this;
                this.compareList.forEach(compareListProductId => {
                    if (compareListProductId == productId ) {
                        isAdded=1;
                    }
                });
                return isAdded;
            },
            addComparelist(productId){
                axios.post('/api/addComparelist', {productId:productId, token: this.token})
                .then(function (response) {
                })
                .catch(function (error) {
                })       
            },
        },
    }
  
</script>


