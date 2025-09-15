<template>
  <div class="modal fade" id="area-model" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLgLabel">
            {{ type == 'create' ? $t('global.add') : $t('global.update') }}
          </h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-2">
              <label class="form-label">{{ $t('label.title') }} ( عربي )</label>
              <input type="text" class="form-control form-control-lg" v-model="v$.title_ar.$model" :class="{
                'is-invalid': v$.title_ar.$error || errors[`title_ar`],
                'is-valid': !v$.title_ar.$invalid && !errors[`title_ar`]
              }">

              <div class="invalid-feedback">
                <span v-if="v$.title_ar.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                <span v-if="v$.title_ar.minLength.$invalid">{{ $t('validation.TitleIsMustHaveAtLeast') }} {{
                  v$.title_ar.minLength.$params.min
                }} {{ $t('validation.Letters') }} <br />
                </span>
                <span v-if="v$.title_ar.maxLength.$invalid">{{ $t('validation.TitleIsMustHaveAtMost') }} {{
                  v$.title_ar.maxLength.$params.max
                }} {{ $t('validation.Letters') }}
                </span>
              </div>
              <template v-if="errors[`title_ar`]">
                <error-message v-for="(errorMessage, index) in errors[`title_ar`]" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>
            <div class="col-md-6 mb-2">
              <label class="form-label">{{ $t('label.title') }} ( English )</label>
              <input type="text" class="form-control form-control-lg" v-model="v$.title_en.$model" :class="{
                'is-invalid': v$.title_en.$error || errors[`title_en`],
                'is-valid': !v$.title_en.$invalid && !errors[`title_en`]
              }">

              <div class="invalid-feedback">
                <span v-if="v$.title_en.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
                <span v-if="v$.title_en.minLength.$invalid">{{ $t('validation.TitleIsMustHaveAtLeast') }} {{
                  v$.title_en.minLength.$params.min
                }} {{ $t('validation.Letters') }} <br />
                </span>
                <span v-if="v$.title_en.maxLength.$invalid">{{ $t('validation.TitleIsMustHaveAtMost') }} {{
                  v$.title_en.maxLength.$params.max
                }} {{ $t('validation.Letters') }}
                </span>
              </div>
              <template v-if="errors[`title_en`]">
                <error-message v-for="(errorMessage, index) in errors[`title_en`]" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>


            <div class="col-md-12 mt-3">
              <label class="form-label">صورة الخلفية (1920 * 900)</label>
              <div class="row img-div-position">
                <div class="col-12 text-end">
                  <button type="button" class="btn btn-danger btn-sm" @click="imageUpload = ''" v-if="imageUpload">
                    {{ $t('global.deleteImage') }}
                  </button>
                </div>
                <div class="col-md-12 mt-3 d-flex flex-wrap flex-fill h-100">
                  <div class="btn btn-outline-light waves-effect" style="width: 100%; height:90%">

                    <span v-if="!imageUpload && !submitData.data.image" style="margin-top:35%;">
                      <br><i class="bi bi-cloud-upload fs-40" style="font-size: 85px;"></i>
                      <i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i>
                    </span>

                    <input name="mediaPackageUpload" type="file" @change="preview" id="photoPersonal1" accept="image/*">

                    <div id="container-images" class="row justify-content-center h-100"></div>

                    <div v-if="imageUpload && !submitData.data.image" class="row justify-content-center h-100">
                      <figure class="col-3" v-if="!imageUpload.mime_type.includes('application/pdf')">
                        <img :src="imageUpload.url" class="img-fluid rounded h-100 w-100 m-1" />
                      </figure>
                      <figure class="col-3" v-else>
                        <img src="/assets/images/pdf.png" class="img-fluid rounded h-100 w-100 m-1" />
                      </figure>
                    </div>

                    <div class="col-md-12 my-1" v-if="v$.image.$error">
                      <span class="text-danger" v-if="v$.image.required.$invalid">{{ $t('validation.fieldRequired')
                      }}<br /></span>
                    </div>
                    <template v-if="errors['image']">
                      <error-message v-for="(errorMessage, index) in errors['image']" :key="index">
                        {{ errorMessage }}
                      </error-message>
                    </template>

                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="custom-toggle-switch d-flex align-items-center mt-4">
                <input id="toggleswitchPrimary" v-model="submitData.data.status" type="checkbox">
                <label for="toggleswitchPrimary" class="label-primary"></label><span class="ms-3">{{ $t('label.status')
                }}</span>
              </div>
              <template v-if="errors['status']">
                <error-message v-for="(errorMessage, index) in errors['status']" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>
            <div class="col-md-6">
              <label class="form-label">{{ $t('global.selectCategory') }}</label>

              <Select v-model="v$.category_id.$model" :filterFields="['id', 'title']" :options="categories" filter
                :invalid="v$.category_id.$error || errors[`category_id`]" optionLabel="title" optionValue="id"
                :class="['w-full w-100', { 'is-invalid': v$.category_id.$error || errors[`category_id`], 'is-valid': !v$.category_id.$invalid && !errors[`category_id`] }]">

              </Select>
              <div class="invalid-feedback">
                <span v-if="v$.category_id.required.$invalid">{{
                  $t('global.ThisFieldIsRequired') }}<br />
                </span>
              </div>
              <template v-if="errors['category_id']">
                <error-message v-for="(errorMessage, index) in errors['category_id']" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>

            <div class="col-md-12 mt-3">
              <label class="form-label">{{ $t('global.details') }} (عربي)</label>

              <Editor ref="descRef" v-model="v$.content_ar.$model" />

              <div class="invalid-feedback">
                <span v-if="v$.content_ar.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
              </div>
              <template v-if="errors[`content_ar`]">
                <error-message v-for="(errorMessage, index) in errors[`content_ar`]" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>
            <div class="col-md-12 mt-3">
              <label class="form-label">{{ $t('global.details') }} (English)</label>

              <Editor ref="descRef" v-model="v$.content_en.$model" />

              <div class="invalid-feedback">
                <span v-if="v$.content_en.required.$invalid">{{ $t('validation.fieldRequired') }}<br /> </span>
              </div>
              <template v-if="errors[`content_en`]">
                <error-message v-for="(errorMessage, index) in errors[`content_en`]" :key="index">
                  {{ errorMessage }}
                </error-message>
              </template>
            </div>



          </div>
        </div>
        <div class="modal-footer">
          <button v-if="type != 'edit'" :disabled="!is_disabled" @click.prevent="resetModal" type="button"
            class="btn btn-secondary">{{ $t('global.AddNewRecord') }}</button>
          <template v-if="!is_disabled">
            <button type="submit" v-if="!loading" @click.prevent="AddSubmit" class="btn btn-primary">{{
              $t('global.Submit') }}</button>

            <button class="btn btn-primary btn-loader" v-else>
              <span class="me-2">{{ $t('global.Loading') }}</span>
              <span class="loading"><i class="ri-loader-2-fill fs-16"></i></span>
            </button>
          </template>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed, onMounted, reactive, ref, toRefs, watch, nextTick, defineEmits, defineComponent } from "vue";
import { useI18n } from "vue-i18n";
import { maxLength, minLength, required, numeric, requiredIf } from "@vuelidate/validators";
import useVuelidate from "@vuelidate/core";
import adminApi from "../../../api/adminAxios";
import { useStore } from "vuex";
import Editor from 'primevue/editor';

const components = { Editor };


const props = defineProps({
  type: { default: 'create' },
  dataRow: { default: '' },
});


const emit = defineEmits(['created', 'getStatus']);

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
const categories = ref([]);
const langValidation = ref({});
let loading = ref(false);
let is_disabled = ref(false);
const { t } = useI18n({});
const store = useStore();
const id = ref(null);
const imageUpload = ref('');



onMounted(() => {
  languages.value = store.state.lang.languages;
  getCategories();
});

function defaultData() {
  submitData.data.title_ar = "";
  submitData.data.title_en = "";
  submitData.data.content_ar = "";
  submitData.data.content_en = "";
  submitData.data.category_id = null;
  is_disabled.value = false;
  loading.value = false;
  errors.value = [];
  imageUpload.value = '';
  let i = document.querySelector('#container-images');
  if (i) { i.innerHTML = ''; }
}

let getCategories = (id) => {
  loading.value = true;
  adminApi.get(`articles/categories`)
    .then((res) => {
      let l = res.data.data;
      categories.value = l;
    })
    .catch((err) => {
      console.log(err.response.data);
    })
    .finally(() => {
      loading.value = false;
    })
}
function resetModal() {
  defaultData();
  setTimeout(async () => {
    if (props.type != 'edit') {
    } else {
      id.value = props.dataRow.id;

      adminApi.get(`articles/${id.value}`)
        .then((res) => {
          loading.value = true;
          let l = res.data.data;
          submitData.data.title_ar = l.title_ar;
          submitData.data.title_en = l.title_en;
          submitData.data.content_ar = l.content_ar;
          submitData.data.content_en = l.content_en;
          submitData.data.image = l.image;
          submitData.data.status = l.status == 1;
          submitData.data.category_id = l.category_id;
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
const submitData = reactive({
  data: {
    title_en: "",
    title_ar: "",
    content_en: "",
    content_ar: "",
    image: "",
    category_id: null,
    status: 1,
  }
});

const rules = computed(() => {
  return {
    title_en: { required, minLength: minLength(2), maxLength: maxLength(100) },
    title_ar: { required, minLength: minLength(2), maxLength: maxLength(100) },
    content_en: { required },
    content_ar: { required },
    category_id: { required },
    image: {
      required: requiredIf((value) => {
        return props.type == 'create' || !imageUpload.value;
      })
    }
  }
});

const v$ = useVuelidate(rules, submitData.data);


const preview = (e) => {
  let containerImages = document.querySelector("#container-images");
  containerImages.innerHTML = "";

  if (e) {
    submitData.data.image = {};
    submitData.data.image = e.target.files[0];
    if (submitData.data.image.type.includes('application/')) {
      let figure = document.createElement('figure');
      figure.className = 'col-3';
      let img = document.createElement('img');
      img.className = 'img-fluid rounded h-100 w-100 m-1';
      img.setAttribute('src', '/assets/images/pdf.png');
      figure.appendChild(img);
      containerImages.appendChild(figure);
    } else {
      let reader = new FileReader();
      let figure = document.createElement('figure');
      figure.className = 'col-3';

      reader.onload = () => {
        let img = document.createElement('img');
        img.className = 'img-fluid rounded h-100 w-100 m-1';
        img.setAttribute('src', reader.result);
        figure.appendChild(img);
      }

      containerImages.appendChild(figure);
      reader.readAsDataURL(submitData.data.image);
    }

  }

};

const AddSubmit = () => {

  v$.value.$validate();
  errors.value = {};

  let formData = new FormData();
  formData.append(`title_en`, submitData.data.title_en);
  formData.append(`title_ar`, submitData.data.title_ar);
  formData.append(`content_en`, submitData.data.content_en);
  formData.append(`content_ar`, submitData.data.content_ar);
  formData.append(`category_id`, submitData.data.category_id);
  formData.append('status', submitData.data.status ? 1 : 0);
  if (submitData.data.image) {
    formData.append('image', submitData.data.image);
  }
  if (props.type !== 'edit') {
    if (!v$.value.$error) {
      is_disabled.value = false;
      loading.value = true;
      adminApi.post(`articles`, formData)
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
  } else if (!v$.value.$error) {
    is_disabled.value = false;
    loading.value = true;
    formData.append('_method', 'PUT');
    adminApi.post(`articles/${id.value}`, formData)
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
