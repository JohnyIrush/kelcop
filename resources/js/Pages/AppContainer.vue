<template>
    <van-tabs v-model:active="activeName">
        <van-tab title="Planning Data Entry" name="a">
            <div class="row mt-4 mb-4 d-flex flex-row">
                <div class="me-auto">
                    <h1>Planning Data Entry</h1>
                </div>
                <div class="ms-auto">
                    <p>FY: {{ currentMainActivity.FY }}</p>
                </div>
            </div>
            <van-row>
                <van-col span="3">
                    <label>AccNo</label>
                    <select class="form-select" aria-label="AccNo" v-model="currentMainActivity.AcNo">
                        <option v-for="(subactivity, index) in subActivities" :key="index">{{ subactivity.AcNo }}</option>
                    </select>
                </van-col>
                <van-col span="5">
                    <label>Refcode Subactivity</label>
                    <select class="form-select" aria-label="Refcode Subactivity"
                        v-model="currentMainActivity.reference_code">
                        <option v-for="(referencecode, index) in referenceCodes" :key="index" :value="referencecode">{{
                            referencecode.RefCode }}</option>
                    </select>
                </van-col>
                <van-col span="3">
                    <label>Category</label>
                    <select class="form-select" aria-label="Refcode Subactivity" v-model="currentMainActivity.category">
                        <option v-for="(category, index) in categories" :key="index" :value="category">{{ category.Cat }}
                        </option>
                    </select>
                    <p>{{ (currentMainActivity.category) ? currentMainActivity.category.cat_description : '' }}</p>
                </van-col>
                <van-col span="4">
                    <label>Financing</label>
                    <select class="form-select" aria-label="Financing" v-model="currentMainActivity.financing">
                        <option v-for="(finance, index) in financing" :key="index" :value="finance">{{ finance.Donor }}
                        </option>
                    </select>
                    <label>{{ (currentMainActivity.financing) ? currentMainActivity.financing.Description : '' }}</label>
                </van-col>
                <van-col span="3">
                    <label>Centre</label>
                    <select class="form-select" aria-label="Centres" v-model="currentMainActivity.center">
                        <option v-for="(centre, index) in centres" :key="index" :value="centre">{{ centre.Center }}</option>
                    </select>
                    <label>{{ (currentMainActivity.center) ? currentMainActivity.center.Description : '' }}</label>
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    <van-field v-model="currentMainActivity.Location" label="Location" placeholder="Location"
                        label-align="top" />
                </van-col>
                <van-col span="3">
                    <van-field v-model="currentMainActivity.Officer" label="Officer" placeholder="Officer"
                        label-align="top" />
                </van-col>
                <van-col span="8">
                    <van-checkbox-group v-model="checked" direction="horizontal">
                        <van-checkbox name="a" :value="Boolean(currentMainActivity.Q1 == 'true')">Q1</van-checkbox>
                        <van-checkbox name="b" :value="Boolean(currentMainActivity.Q2 == 'true')">Q2</van-checkbox>
                        <van-checkbox name="c" :value="Boolean(currentMainActivity.Q3 == 'true')">Q3</van-checkbox>
                        <van-checkbox name="d" :value="Boolean(currentMainActivity.Q4 == 'true')">Q4</van-checkbox>
                    </van-checkbox-group>
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    Component
                </van-col>
                <van-col span="12">
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Component : '' }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    Sub Component
                </van-col>
                <van-col span="12">
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Output : '' }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    Major Activity
                </van-col>
                <van-col span="12">
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.ActivityMain : '' }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    RefCode Activity
                </van-col>
                <van-col span="12">
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.RefCodeCategory : '' }}
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.ActivityCategory : '' }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="6">
                    Sub Activity
                </van-col>
                <van-col span="12">
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.RefCode : '' }}
                    {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Activity : '' }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="20">
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
                                <tr v-for="(subactivity, index) in currentMainActivity.sub_activities" :key="index">
                                    <th scope="row">{{ subactivity.id }}</th>
                                    <td>
                                        <input class="form-control" type="text" :value="subactivity.SubActivity"
                                            aria-label="">
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
                                        <select class="form-select" aria-label="AccNo" v-model="subactivity.Item">
                                            <option :value="subactivity.Item" selected>{{ subactivity.Item }}</option>
                                            <option v-for="(expenseItem, index) in expenseitems" :key="index">{{
                                                expenseItem.Item }}</option>
                                        </select>
                                    </td>
                                    <td>
                                        {{ }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </van-col>
                <van-col span="4">
                    <h3>Activity Targets Entry</h3>
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(reference_code_unit, index) in currentMainActivity.reference_code_units"
                                :key="index">
                                <td>{{ reference_code_unit.Unit }}</td>
                            </tr>
                        </tbody>
                    </table>
                </van-col>
            </van-row>
            <div class="row">
                <div class="col-4">
                    <van-row>
                        <van-col span="12">
                            <van-button icon="records" type="success">
                                Save
                            </van-button>
                        </van-col>
                        <van-col span="12">
                            <van-button icon="plus" type="primary" @click="showDataEntryForm = !showDataEntryForm">
                                Add
                            </van-button>
                        </van-col>
                    </van-row>
                </div>
                <div class="col-2">
                    <van-row>
                            <van-button icon="delete-o" type="danger">Delete</van-button>
                    </van-row>
                </div>
                <div class="col-6">
                    <van-row>
                        <pagination :records="mainActivities" @newRecord="filterMainActivities($event)"></pagination>
                    </van-row>
                </div>
            </div>
        </van-tab>
        <van-tab title="Target Data Entry" name="b">
            <target-data-entry />
        </van-tab>
        <van-tab title="Detailed by Component" name="c">
            <detailed-component-activity-report />
        </van-tab>
        <van-tab title="Summary by Component" name="d">
            <component-activity-report />
        </van-tab>
        <van-tab title="Summary by Categories and Financing" name="e">
            <category-financing-report />
        </van-tab>
        <van-tab title="Summary by Subitems" name="f">
            <sub-item-report />
        </van-tab>
    </van-tabs>
    <van-action-sheet v-model:show="showDataEntryForm" title="Title">
        <div class="content">Content</div>
        <data-entry />
    </van-action-sheet>
</template>
  
<script>

import { handleError } from 'vue';
import { defineComponent, ref, inject } from 'vue'
import Pagination from "../Components/Pagination.vue";
import DataEntry from "../Components/DataEntry.vue";
import TargetDataEntry from "../Components/TargetDataEntry.vue";
import SubItemReport from "../Components/SubItemReport.vue";
import CategoryFinancingReport from "../Components/CategoryFinancingReport.vue";
import ComponentActivityReport from "../Components/ComponentActivityReport.vue";
import DetailedComponentActivityReport from "../Components/DetailedComponentActivityReport.vue";



export default defineComponent({
    components: {
        Pagination,
        DataEntry,
        TargetDataEntry,
        SubItemReport,
        CategoryFinancingReport,
        ComponentActivityReport,
        DetailedComponentActivityReport
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
        const showDataEntryForm = ref(false);

        return {
            columns,
            onChange,
            onCancel,
            onConfirm,
            showPicker,
            showDataEntryForm
        };
    },
    computed: {
        selectedReferenceCode() {
            return (this.currentMainActivity.reference_code) ? this.currentMainActivity.reference_code.RefCode
                : ''
        }
    },
    data() {
        return {
            subActivities: [], // store subactivities
            selectedSubactivity: [], // store selected subactivity
            currentSubActivies: [], // current filtered subactivities displayed 
            referenceCodes: [], // store referenceCodes
            //selectedReferenceCode: [], // store selected referenceCode
            currentReferenceCode: {}, // current filtered referenceCodes displayed 
            categories: [], //store categories fetched
            selectedCategory: {}, //current selected category
            financing: [], //store financing fetched
            selectedFinancing: {}, //current selected financing
            centres: [], //store centres fetched
            selectedCentre: {}, //current selected centre
            expenseitems: [], // fetch expense items

            mainActivities: [], //store main activities
            currentMainActivity: {}, // current activity
        }

    },
    methods: {
        //filter  mainactivities by AcNo
        filterMainActivities(value) {
            //alert(value)
            this.currentMainActivity = this.mainActivities.filter((mainactivity) => {
                return mainactivity.AcNo == value.AcNo;
            })[0]
            console.log(this.currentMainActivity)
        },
        // capture subactivity selection
        mainActivitySelected(value) {
            //alert(value);
            //console.log(value)
            this.filterMainActivities(value)
        },
        //fetch subactivities records
        getMainActivities() {
            axios.get('/api/mainactivity/index')
                .then((response) => {
                    this.mainActivities = response.data
                    //console.log(response)
                })
        },
        getItemDescription(Item) {
            //alert(Item)
            var expenseItem = this.expenseitems.filter((expenseItem) => { return expenseItem.Item == Item; })
            console.log(expenseItem)
            return expenseItem.Description;
        },
        //fetch centres
        getExpenseItems() {
            axios.get('/api/expenseitem/index')
                .then((response) => {
                    this.expenseitems = response.data
                    //console.log(response)
                })
        },
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
        this.getExpenseItems()

        this.getMainActivities()
    },
    created() {

    },
    watch: {
        currentMainActivity: {
            handler(newValue, oldValue) {
                this.filterMainActivities(newValue)
            },
            deep: true
        },
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
  
  
<style scoped>
.content {
    margin: 10px 10px 10px 10px !important;
}
</style>