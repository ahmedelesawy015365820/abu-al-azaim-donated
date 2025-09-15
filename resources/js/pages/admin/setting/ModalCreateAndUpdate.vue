<template>
    <div class="modal fade" id="area-model" tabindex="-1"
         aria-labelledby="exampleModalLgLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLgLabel">
                        {{type == 'create' ? $t('global.add') : $t('global.update')}}
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6 my-2">
                        <label class="form-label">الاميل الاول</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.email_1.$model"
                               :class="{'is-invalid': v$.email_1.$error || errors[`email_1`],
                                   'is-valid': !v$.email_1.$invalid && !errors[`email_1`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.email_1.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`email_1`]">
                            <error-message v-for="(errorMessage, index) in errors[`email_1`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">الاميل الثاني</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.email_2.$model"
                               :class="{'is-invalid': v$.email_2.$error || errors[`email_2`],
                                   'is-valid': !v$.email_2.$invalid && !errors[`email_2`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.email_2.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`email_2`]">
                            <error-message v-for="(errorMessage, index) in errors[`email_2`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">الموبيل الاول</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.mobile_1.$model"
                               :class="{'is-invalid': v$.mobile_1.$error || errors[`mobile_1`],
                                   'is-valid': !v$.mobile_1.$invalid && !errors[`mobile_1`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.mobile_1.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`mobile_1`]">
                            <error-message v-for="(errorMessage, index) in errors[`mobile_1`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">الموبيل الثاني</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.mobile_2.$model"
                               :class="{'is-invalid': v$.mobile_2.$error || errors[`mobile_2`],
                                   'is-valid': !v$.mobile_2.$invalid && !errors[`mobile_2`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.mobile_2.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`mobile_2`]">
                            <error-message v-for="(errorMessage, index) in errors[`mobile_2`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">انستغرام</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.instagram.$model"
                               :class="{'is-invalid': v$.instagram.$error || errors[`instagram`],
                                   'is-valid': !v$.instagram.$invalid && !errors[`instagram`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.instagram.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`instagram`]">
                            <error-message v-for="(errorMessage, index) in errors[`instagram`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">الفيسبوك</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.facebook.$model"
                               :class="{'is-invalid': v$.facebook.$error || errors[`mobile_2`],
                                   'is-valid': !v$.facebook.$invalid && !errors[`facebook`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.facebook.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`facebook`]">
                            <error-message v-for="(errorMessage, index) in errors[`facebook`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label">لينكد ان</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.linkedin.$model"
                               :class="{'is-invalid': v$.linkedin.$error || errors[`linkedin`],
                                   'is-valid': !v$.linkedin.$invalid && !errors[`linkedin`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.linkedin.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`linkedin`]">
                            <error-message v-for="(errorMessage, index) in errors[`linkedin`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-6 my-2">
                        <label class="form-label"> تويرتر</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.twitter.$model"
                               :class="{'is-invalid': v$.twitter.$error || errors[`twitter`],
                                   'is-valid': !v$.twitter.$invalid && !errors[`twitter`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.twitter.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                          <template v-if="errors[`twitter`]">
                            <error-message v-for="(errorMessage, index) in errors[`twitter`]" :key="index">
                              {{ errorMessage }}
                            </error-message>
                          </template>
                        </div>
                      </div>
                      <div class="col-md-12 my-2">
                        <label class="form-label"> الخريطة</label>
                        <input type="text" class="form-control form-control-lg"  v-model="v$.map.$model"
                               :class="{'is-invalid': v$.map.$error || errors[`map`],
                                   'is-valid': !v$.map.$invalid && !errors[`map`]}">

                        <div class="invalid-feedback">
                          <span v-if="v$.map.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                        </div>
                        <template v-if="errors[`map`]">
                          <error-message v-for="(errorMessage, index) in errors[`map`]" :key="index">
                            {{ errorMessage }}
                          </error-message>
                        </template>
                      </div>
                      <div class="col-md-6 mt-3" v-if="submitData.data.ar" v-for="lang in languages">
                        <label class="form-label">{{ $t('label.description') }} ({{ lang == 'ar' ? 'عربي' : 'English' }})</label>
                        <textarea
                            class="form-control summernote"
                            rows="4"
                            v-model.trim="v$[`address_${lang}`].$model"
                            :class="{'is-invalid': v$[`address_${lang}`].$error ||errors[`address_${lang}`],
                                    'is-valid':!v$[`address_${lang}`].$invalid && !errors[`address_${lang}`]}">
                            </textarea>
                        <template v-if="errors[`address_${lang}`]">
                          <error-message v-for="(errorMessage, index) in errors[`address_${lang}`]" :key="index">
                            {{ errorMessage }}
                          </error-message>
                        </template>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button v-if="type != 'edit'" :disabled="!is_disabled"
                            @click.prevent="resetModal" type="button" class="btn btn-secondary">{{$t('global.AddNewRecord')}}</button>
                    <template v-if="!is_disabled">
                        <button type="submit" v-if="!loading" @click.prevent="AddSubmit" class="btn btn-primary">{{ $t('global.Submit') }}</button>

                        <button class="btn btn-primary btn-loader" v-else>
                            <span class="me-2">{{$t('global.Loading')}}</span>
                            <span class="loading"><i class="ri-loader-2-fill fs-16"></i></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
  import {computed, onMounted, reactive, ref, toRefs, watch, nextTick, defineEmits} from "vue";
  import {useI18n} from "vue-i18n";
  import {maxLength, minLength, required, numeric, requiredIf} from "@vuelidate/validators";
  import useVuelidate from "@vuelidate/core";
  import adminApi from "../../../api/adminAxios";
  import {useStore} from "vuex";

  const props = defineProps({
      type: {default: 'create'},
      dataRow: {default: ''},
  });

  const emit = defineEmits(['created','getStatus']);

  setTimeout(async () => {
    let myModalEl = document.getElementById('area-model')
    myModalEl.addEventListener('show.bs.modal', function (event) {
      resetModal();
    })
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
      resetModalHidden();
    })
  }, 150);
  const errors = ref([]);
  const areas = ref([]);
  const languages = ref([]);
  const cities = ref([]);
  const langValidation = ref({});
  let loading = ref(false);
  let is_disabled = ref(false);
  const { t } = useI18n({});
  const store = useStore();
  const id = ref(null);
  const imageUpload = ref('');

  onMounted(()=>{
    languages.value = store.state.lang.languages;
  });

  function defaultData(){
    is_disabled.value = false;
    loading.value = false;
    errors.value = [];
  }
  function resetModal() {
    defaultData();
    setTimeout(async () => {
      if (props.type != 'edit') {
      } else {
        id.value = props.dataRow.id;

        adminApi.get(`settings/${id.value}`)
            .then((res) => {
              loading.value = true;
              let l = res.data.data;
              submitData.data.email_1 = l.email_1;
              submitData.data.email_2 = l.email_2;
              submitData.data.mobile_1 = l.mobile_1;
              submitData.data.mobile_2 = l.mobile_2;
              submitData.data.twitter = l.twitter;
              submitData.data.instagram = l.instagram;
              submitData.data.facebook = l.facebook;
              submitData.data.linkedin = l.linkedin;
              submitData.data.map = `${l.map}`;
              submitData.data.address_ar = l.address_ar;
              submitData.data.address_en = l.address_en;
            })
            .catch((err) => {
              console.log(err);
            })
            .finally(() => {
              loading.value = false;
            })
      }
    }, 50);
  }
  function resetModalHidden() {
    defaultData();
    nextTick(() => { v$.value.$reset() });
  }
  //start design
  const submitData =  reactive({
    data:{
      email_1: '',
      email_2: '',
      mobile_1: '',
      mobile_2: '',
      twitter: '',
      instagram: '',
      facebook: '',
      linkedin: '',
      map: '',
    }
  });

  const rules = computed(() => {
    return {
      email_1: { required },
      email_2: { required },
      mobile_1: { required },
      address_en: { required },
      address_ar: { required },
      mobile_2: { required },
      twitter: { required },
      instagram: { required },
      facebook: { required },
      linkedin: { required },
      map: { required },
    }
  });

  const v$ = useVuelidate(rules,submitData.data);

  const AddSubmit = () =>  {

      v$.value.$validate();
      errors.value = {};

      let formData = new FormData();
      formData.append(`address_ar`, submitData.data.address_ar);
      formData.append(`address_en`, submitData.data.address_en);
      formData.append(`email_1`, submitData.data.email_1);
      formData.append(`email_2`, submitData.data.email_2);
      formData.append(`mobile_1`, submitData.data.mobile_1);
      formData.append(`mobile_2`, submitData.data.mobile_2);
      formData.append(`map`, submitData.data.map);
      formData.append(`facebook`, submitData.data.facebook);
      formData.append(`twitter`, submitData.data.twitter);
      formData.append(`instagram`, submitData.data.instagram);
      formData.append(`linkedin`, submitData.data.linkedin);
      if (props.type !== 'edit') {
        if (!v$.value.$error) {
          is_disabled.value = false;
          loading.value = true;
          adminApi.post(`settings`, formData)
              .then((res) => {
                Swal.fire({
                  icon: 'success',
                  title: `${t('global.AddedSuccessfully')}`,
                  showConfirmButton: false,
                  timer: 1500
                });
                emit("created");
                is_disabled.value = true;
              })
              .catch((err) => {
                errors.value = err.response?.data?.errors;
              })
              .finally(() => {
                loading.value = false;
              });
        }
      }else if(!v$.value.$error) {
        is_disabled.value = false;
        loading.value = true;
        formData.append('_method','PUT');
        adminApi.post(`settings/${id.value}`,formData)
            .then((res) => {
              Swal.fire({
                icon: 'success',
                title: `${t('global.EditSuccessfully')}`,
                showConfirmButton: false,
                timer: 1500
              });
              emit("created");
            })
            .catch((err) => {
              errors.value = err.response?.data?.errors;
            })
            .finally(() => {
              loading.value = false;
            });
      }

}

</script>

<style scoped>
.ml-3 {
  margin-left: 1.5rem;
}

.waves-effect {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  width: 200px;
  height: 50px;
  text-align: center;
  line-height: 34px;
  margin: auto;
}

input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
}

.waves-effect[data-v-d8970579] {
  background-color: #e9e9e9;
}

</style>
