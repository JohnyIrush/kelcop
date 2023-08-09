<template>
    <van-row>
        <van-col span="3">
            <label>AccNo</label>
            <input class="form-control" type="text" aria-label="">
        </van-col>
        <van-col span="5">
            <label>Refcode Subactivity</label>
            <select class="form-select" aria-label="Refcode Subactivity" v-model="selectedReferenceCode">
                <option v-for="(referencecode, index) in referenceCodes" :key="index" :value="referencecode">{{
                    referencecode.RefCode }}</option>
            </select>
        </van-col>
        <van-col span="3">
            <label>Category</label>
            <select class="form-select" aria-label="Refcode Subactivity" v-model="selectedCategory">
                <option v-for="(category, index) in categories" :key="index" :value="category">{{ category.Cat }}
                </option>
            </select>
            <label>{{ selectedCategory.cat_description }}</label>
        </van-col>
        <van-col span="4">
            <label>Financing</label>
            <select class="form-select" aria-label="Financing" v-model="selectedFinancing">
                <option v-for="(finance, index) in financing" :key="index" :value="finance">{{ finance.Donor }}
                </option>
            </select>
            <label>{{ selectedFinancing.Description }}</label>
        </van-col>
        <van-col span="3">
            <label>Centre</label>
            <select class="form-select" aria-label="Centres" v-model="selectedCentre">
                <option v-for="(centre, index) in centres" :key="index" :value="centre">{{ centre.Center }}</option>
            </select>
            <label>{{ selectedCentre.Description }}</label>
        </van-col>
    </van-row>
    <van-row>
        <van-col span="4">
            <van-field label="Location" placeholder="Location" label-align="top" />
        </van-col>
        <van-col span="3">
            <van-field v-model="value" label="Officer" placeholder="Officer" label-align="top" />
        </van-col>
        <van-col span="8">
            <van-checkbox-group v-model="checked" direction="horizontal">
                <van-checkbox name="a">Q1</van-checkbox>
                <van-checkbox name="b">Q2</van-checkbox>
                <van-checkbox name="c">Q3</van-checkbox>
                <van-checkbox name="d">Q4</van-checkbox> </van-checkbox-group>
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Component
        </van-col>
        <van-col span="12">
            {{ selectedReferenceCode.Component }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Sub Component
        </van-col>
        <van-col span="12">
            {{ selectedReferenceCode.Output }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Major Activity
        </van-col>
        <van-col span="12">
            {{ selectedReferenceCode.ActivityMain }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            RefCode Activity
        </van-col>
        <van-col span="12">
            {{ selectedReferenceCode.RefCodeCategory }}
            {{ selectedReferenceCode.ActivityCategory }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Sub Activity
        </van-col>
        <van-col span="12">
            {{ selectedReferenceCode.RefCode }}
            {{ selectedReferenceCode.Activity }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="24">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item Description</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Qty</th>
                            <th scope="col">UnitCost</th>
                            <th scope="col">Budget</th>
                            <th scope="col">SubItem</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(subactivity, index) in currentSubActivies" :key="index">
                            <th scope="row">{{ subactivity.id }}</th>
                            <td>
                                <input class="form-control" type="text" :value="subactivity.SubActivity" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="subactivity.Unit" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="subactivity.Qty" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="subactivity.UnitCost" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="subactivity.Budget" aria-label="">
                            </td>
                            <td>
                                {{ subactivity.Item }}</td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ newRecord.id }}</th>
                            <td>
                                <input class="form-control" type="text" :value="newRecord.SubActivity" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="newRecord.Unit" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="newRecord.Qty" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="newRecord.UnitCost" aria-label="">
                            </td>
                            <td>
                                <input class="form-control" type="text" :value="newRecord.Budget" aria-label="">
                            </td>
                            <td>
                                {{ newRecord.Item }}</td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </van-col>
    </van-row>
    <div class="row mt-3">
        <div class="col-6">
            <van-row>
                <van-col span="6">
                    <van-button icon="plus" type="success">
                        Save
                    </van-button>
                </van-col>
                <van-col span="6">
                </van-col>
            </van-row>
        </div>
        <div class="col-6">
            <van-row>

            </van-row>
        </div>
    </div>
</template>
  
<script>

import { handleError } from 'vue';
import { defineComponent, ref, inject } from 'vue'
import Pagination from "../Components/Pagination.vue";


export default defineComponent({
    components: {
        Pagination
    },
    setup(props, context) {

        const columns = [
            { text: 'Delaware', value: 'Delaware' },
            { text: 'Florida', value: 'Florida' },
            { text: 'Wenzhou', value: 'Wenzhou' },
            { text: 'Indiana', value: 'Indiana' },
            { text: 'Maine', value: 'Maine' },
        ];
        const onConfirm = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onChange = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onCancel = () => showToast('Cancel');

        const showPicker = ref(false);

        return {
            columns,
            onChange,
            onCancel,
            onConfirm,
            showPicker
        };
    },
    computed: {

    },
    data() {
        return {
            subActivities: [], // store subactivities
            selectedSubactivity: [], // store selected subactivity
            currentSubActivies: [], // current filtered subactivities displayed 
            referenceCodes: [], // store referenceCodes
            selectedReferenceCode: [], // store selected referenceCode
            currentReferenceCode: {}, // current filtered referenceCodes displayed 
            categories: [], //store categories fetched
            selectedCategory: {}, //current selected category
            financing: [], //store financing fetched
            selectedFinancing: {}, //current selected financing
            centres: [], //store centres fetched
            selectedCentre: {}, //current selected centre

            newRecord: {
                id: '',
                AcNo: '',
                SubActivity: '',
                Unit: '',
                Qty: '',
                UnitCost: '',
                Budget: '',
                Item: '',

            } // new Record holder
        }

    },
    methods: {
        //fetch centres
        getCentres() {
            axios.get('/api/centre/index')
                .then((response) => {
                    this.centres = response.data
                    //console.log(response)
                })
        },
        //fetch financing
        getFinancing() {
            axios.get('/api/financing/index')
                .then((response) => {
                    this.financing = response.data
                    //console.log(response)
                })
        },
        //fetch categories
        getCategories() {
            axios.get('/api/category/index')
                .then((response) => {
                    this.categories = response.data
                    //console.log(response)
                })
        },
        filterReferenceCode(value) {
            const result = this.referenceCodes.filter((referencecode) => {
                return referencecode.RefCode == value;
            })

            //this.currentReferenceCode = JSON.parse(JSON.stringify(result))[0]
            //currentReferenceCode

            //console.log('filter',this.currentReferenceCode)
        },
        // capture subactivity selection
        referenceCodeSelected(value) {
            //alert(value);
            //console.log(value)
            this.filterReferenceCode(value)
        },
        //fetch reference codes records
        getReferenceCodes() {
            axios.get('/api/referencecode/index')
                .then((response) => {
                    this.referenceCodes = response.data
                    //console.log(response)
                })
        },
        //filter subactivities by AcNo
        filterSubActivities(value) {
            this.currentSubActivies = this.subActivities.filter((subactivity) => {
                return subactivity.AcNo == value;
            })
            //console.log(this.currentSubActivies)
        },
        // capture subactivity selection
        subActivitySelected(value) {
            //alert(value);
            //console.log(value)
            this.filterSubActivities(value)
        },
        //fetch subactivities records
        getSubActivities() {
            axios.get('/api/subactivity/index')
                .then((response) => {
                    this.subActivities = response.data
                    //console.log(response)
                })
        }
    },
    mounted() {
        this.getSubActivities();
        this.getReferenceCodes();
        this.getCategories()
        this.getFinancing()
        this.getCentres()
    },
    created() {

    },
    watch: {
        selectedSubactivity: {
            handler(newValue, oldValue) {
                this.subActivitySelected(newValue)
            },
            immediate: true
        },
        selectedReferenceCode: {
            handler(newValue, oldValue) {
                //this.referenceCodeSelected(newValue)
            },
            immediate: true
        }
    },
})
</script>
  
  
<style scoped></style>