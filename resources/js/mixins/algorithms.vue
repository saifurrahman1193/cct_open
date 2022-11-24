<script>
export default {
    methods: {
        sortArrayOfObjectsDesc(array1, array2, keyField) {

            // console.log('called=====================')
            // console.log(array1)

            var finalArray=[];

            array1.forEach(array1obj => {
                array2.forEach(array2obj => {
                    if ( array1obj[keyField] >= array2obj[keyField]) {

                        finalArray.push(array1obj)
                    }

                });
            });

            return finalArray;
        },
        arrayOfObjectSort(arryData, sortFieldName){
            arryData.sort((a, b) => {
                if (a[sortFieldName] < b[sortFieldName]) return -1
                return a[sortFieldName] > b[sortFieldName] ? 1 : 0
            })

            return arryData;
        },
        arrayOfObjectSortDesc(arryData, sortFieldName){
            arryData.sort((a, b) => {
                if (a[sortFieldName] > b[sortFieldName]) return -1
                return a[sortFieldName] < b[sortFieldName] ? 1 : 0
            })

            return arryData;
        }
    }
}
</script>
