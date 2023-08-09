<template>
     <van-col span="8" offset="4">
         <van-button icon="arrow-left" type="primary" @click="prevRecord" :disabled="currentIndex === 0"> 
             Previous
         </van-button>
     </van-col>
     <van-col span="8">
         <van-button icon="arrow" type="primary" @click="nextRecord" :disabled="currentIndex === records.length - 1">
             Next
         </van-button>
     </van-col>
</template>
  
<script>
export default {
    props: {
        records: {
            type: Array,
            default: [],
            required: true,
        },
    },
    data() {
        return {
            currentIndex: 0,
            currentRecord: {},
        };
    },
    methods: {
        changeRecord(value)
        {
            this.$emit('newRecord', value)
        },
        prevRecord() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
                this.currentRecord = this.records[this.currentIndex];
                this.changeRecord(this.currentRecord)
            }
        },
        nextRecord() {
            if (this.currentIndex < this.records.length - 1) {
                this.currentIndex++;
                this.currentRecord = this.records[this.currentIndex];
                this.changeRecord(this.currentRecord)
            }
        },
    },
    mounted() {
       // this.changeRecord(this.records[0])
    },
};
</script>
  
<style>
/*
.record-container {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.record {
    font-size: 18px;
}

.pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

button {
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
}
*/
</style>
  