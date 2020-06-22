<template>
    <div>
        <header-image
                :image-url="listing.images[0]"
                @header-clicked="openModal"
                :id="listing.id"
        ></header-image>
        <div class="listing-container">
            <div class="heading">
                <h1>{{ listing.title }}</h1>
                <p>{{ listing.address }}</p>
            </div>
            <hr>
            <div class="about">
                <h3>Об этом месте</h3>
                <expandable-text>{{ listing.about }}</expandable-text>
            </div>
            <div class="lists">
                <feature-list title="Удобства" :items="listing.amenities">
                    <template slot-scope="amenity">
                        <i class="fa fa-lg" :class="amenity.icon"></i>
                        <span>{{ amenity.title }}</span>
                    </template>
                </feature-list>
                <feature-list title="Цены" :items="listing.prices">
                    <template slot-scope="price">
                        {{ price.title }}: <strong>{{ price.value }}</strong>
                    </template>
                </feature-list>
            </div>
            <form action="/"  @submit="alert_on_submit" name="form_201503890201341" id="rent_form" accept-charset="utf-8" autocomplete="on" class="jotform-form">
              <input type="hidden" name="formID" value="201503890201341">
              <input type="hidden" id="JWTContainer" value="">
              <input type="hidden" id="cardinalOrderNumber" value="">
              <div role="main" class="form-all">
                <ul class="form-section page-section">
                  <li id="cid_14" data-type="control_head" class="form-input-wide">
                    <div class="form-header-group  header-large">
                      <div class="header-text httal htvam">
                        <h1 id="header_14" data-component="header" class="form-header">
                          Забронировать
                        </h1>
                      </div>
                    </div>
                  </li>
                  <li data-type="control_fullname" id="id_19" class="form-line">
                    <label id="label_19" for="first_19" class="form-label form-label-left form-label-auto"> Имя </label>
                    <div id="cid_19" class="form-input">
                      <div data-wrapper-react="true">
                        <span data-input-type="first" class="form-sub-label-container " style="vertical-align: top;">
                          <input required type="text" id="first_19" name="q19_name[first]" placeholder="Иван" size="10" value="" data-component="first" aria-labelledby="label_19 sublabel_19_first" class="form-textbox">
                          <label for="first_19" id="sublabel_19_first" aria-hidden="false" class="form-sub-label" style="min-height: 13px;"> Имя </label>
                        </span>
                        <span data-input-type="last" class="form-sub-label-container " style="vertical-align: top;">
                          <input required type="text" id="last_19" name="q19_name[last]" size="15" placeholder="Петров" data-component="last" aria-labelledby="label_19 sublabel_19_last" class="form-textbox" style="width: 137px;">
                          <label for="last_19" id="sublabel_19_last" aria-hidden="false" class="form-sub-label" style="min-height: 13px;"> Фамилия </label>
                        </span>
                      </div>
                    </div>
                  </li>
                  <li data-type="control_email" id="id_18" class="form-line">
                    <label id="label_18" for="input_18" class="form-label form-label-left form-label-auto"> E-mail </label>
                    <div id="cid_18" class="form-input">
                      <input required type="email" id="input_18" name="q18_email18" size="32" value="" placeholder="myname@example.com" data-component="email" aria-labelledby="label_18" class="form-textbox validate[Email]">
                    </div>
                  </li>
                  <li data-type="control_phone" id="id_17" class="form-line">
                    <label id="label_17" for="input_17_area" class="form-label form-label-left form-label-auto"> Номер телефона </label>
                    <div id="cid_17" class="form-input">
                      <div data-wrapper-react="true">
                        <span data-input-type="phone" class="form-sub-label-container " style="vertical-align: top;">
                          <input required type="tel" id="input_17_phone" placeholder="+79892726697" name="q17_phoneNumber17[phone]" size="12" value="" data-component="phone" aria-labelledby="label_17 sublabel_17_phone" class="form-textbox" style="width: 200px;">
                          <label for="input_17_phone" id="sublabel_17_phone" aria-hidden="false" class="form-sub-label" style="min-height: 13px;">Номер телефона</label>
                        </span>
                      </div>
                    </div>
                  </li>
                  <li data-type="control_datetime" id="id_15" class="form-line allowTime"><label id="label_15" for="month_15" class="form-label form-label-left form-label-auto"> Начальная дата </label>
                    <div id="cid_15" class="form-input">
                      <div data-wrapper-react="true" class="extended">
                        <span class="form-sub-label-container " style="vertical-align: top;">
                          <input required type="date" id="month_15" name="q15_dateFrom[month]" placeholder="20.06.2020" autocomplete="off" aria-labelledby="label_15 sublabel_15_month" class="form-textbox validate[limitDate]" style="width: 170px;">
                          <label for="month_15" id="sublabel_15_month" aria-hidden="false" class="form-sub-label" style="min-height: 13px;"> Дата </label>
                        </span>
                      </div>
                    </div>
                  </li>
                  <li data-type="control_datetime" id="id_16" class="form-line allowTime">
                    <label id="label_16" for="month_16" class="form-label form-label-left form-label-auto"> Конечная дата </label>
                    <div id="cid_16" class="form-input">
                      <div data-wrapper-react="true" class="extended">
                        <span class="form-sub-label-container " style="vertical-align: top;">
                          <input required type="date" id="month_16" name="q16_dateTo[month]" placeholder="25.06.2020" autocomplete="off" aria-labelledby="label_16 sublabel_16_month" class="form-textbox validate[limitDate]" style="width: 170px;">
                          <label for="month_16" id="sublabel_16_month" aria-hidden="false" class="form-sub-label" style="min-height: 13px;"> Дата </label>
                        </span>
                      </div>
                    </div>
                  </li>
                  <li data-type="control_textbox" id="id_10" class="form-line">
                    <label id="label_10" for="input_10" class="form-label form-label-left form-label-auto"> Кол-во людей </label>
                    <div id="cid_10" class="form-input">
                      <input required type="text" id="input_10" name="q10_noOf" placeholder="1" data-type="input-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_10" class="form-textbox validate[Numeric]" style="width: 170px;">
                    </div>
                  </li>
                  <li data-type="control_textarea" id="id_9" class="form-line">
                    <label id="label_9" for="input_9" class="form-label form-label-left form-label-auto"> Комментарии </label>
                    <div id="cid_9" class="form-input">
                      <textarea id="input_9" name="q9_comments" cols="40" rows="6" data-component="textarea" aria-labelledby="label_9" class="form-textarea"></textarea>
                    </div>
                  </li>
                  <li data-type="control_button" id="id_13" class="form-line">
                    <div id="cid_13" class="form-input-wide">
                      <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField" style="margin-left: 156px;">
                        <button id="input_13" type="submit" data-component="button" data-content="" class="form-submit-button submit-button jf-form-buttons jsTest-submitField">
                          Забронировать
                        </button>
                      </div>
                    </div>
                  </li>
                  <li style="display: none;">
                    Should be Empty:
                    <input type="text" name="website" value="">
                  </li>
                </ul>
              </div>
              <input type="hidden" id="simple_spc" name="simple_spc" value="201503890201341">
            </form>
        </div>
        <modal-window ref="imagemodal">
            <image-carousel :images="listing.images"></image-carousel>
        </modal-window>





    </div>
</template>
<script>
    import { populateAmenitiesAndPrices } from '../js/helpers';

    import ImageCarousel from './ImageCarousel.vue';
    import ModalWindow from './ModalWindow.vue';
    import FeatureList from './FeatureList.vue';
    import HeaderImage from './HeaderImage.vue';
    import ExpandableText from './ExpandableText.vue';

    export default {
        components: {
            ImageCarousel,
            ModalWindow,
            FeatureList,
            HeaderImage,
            ExpandableText
        },
        computed: {
            listing() {
                return populateAmenitiesAndPrices(
                        this.$store.getters.getListing(this.$route.params.listing)
                );
            }
        },
        methods: {
            openModal() {
                this.$refs.imagemodal.modalOpen = true;
            },
            alert_on_submit() {
              alert('Ваша заявка успешно отправлена');
            }
        }
    }
</script>
<style>
    .heading {
        margin-bottom: 2em;
    }

    .heading h1 {
        font-size: 32px;
        font-weight: 700;
    }

    .heading p {
        font-size: 15px;
        color: #767676;;
    }

    .about {
        margin: 2em 0;
    }

    .about h3 {
        font-size: 22px;
    }







    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#555 !important;
        /* font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif; */
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }







    /* .form-all {
      font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
    } */
    /* .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
    } */
    /* .form-label {
      font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
    } */
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 696px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14pxpx
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }
  
    .supernova .form-all, .form-all {
     
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      font-size: 32px;
      font-weight: 700;
      color: #484848 !important;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  li:first-child .form-header-group, .form-header-group + .form-header-group {
    border-top: 1px solid #e3e3e3 !important;
  }
  .form-header-group {
    background: transparent;
    border: none;
    padding: 28px 0 !important;
     margin: 0 !important; 
    /* border-bottom: 1px solid #e3e3e3; */
    border-top: 1px solid #e3e3e3;
}
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 0;
  }
}
.form-textbox {
  border-radius: 4px;
}
.form-textarea {
  border-radius: 4px;
}
li[data-type="control_datetime"] input.form-textbox {
    padding: 3px !important;
    margin: 0;
}

</style>
