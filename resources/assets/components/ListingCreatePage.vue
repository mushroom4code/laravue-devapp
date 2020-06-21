<template>
    <div id="login" class="listing-create-container">
        <form role="form" method="POST" action="/listing_create" enctype="multipart/form-data">
            <input type="hidden" name="_token" :value="csrf_token">
            <div class="form-control">
                <label for="title"><b>Заголовок</b></label>
                <input id="title" type="text" name="title" placeholder="Квартира в центре города с удобствами" required autofocus>
            </div>
            <div class="form-control">
                <label for="address"><b>Адрес</b></label>
                <input id="address" type="text" name="address" placeholder="№ 11, Суншоу Роуд, Тайбэй, Тайвань 105" required>
            </div>
            <div class="form-control">
                <label for="country"><b>Страна</b></label>
                <input id="country" type="text" name="country" placeholder="Англия" required>
            </div>
            <div class="form-control">
                <label for="price_per_night"><b>Цена за ночь (в долларах)</b></label>
                <input id="country" type="text" name="price_per_night" placeholder="100" required>
            </div>
            <div class="form-control">
                <label for="price_extra_people"><b>Цена за дополнительного человека (в долларах)</b></label>
                <input id="price_extra_people" type="text" name="price_extra_people" placeholder="15" required>
            </div>
            <div class="form-control">
                <label for="price_weekly_discount"><b>Скидка на пребывание дольше недели (в процентах)</b></label>
                <input id="price_weekly_discount" type="text" name="price_weekly_discount" placeholder="12" required>
            </div>
            <div class="form-control">
                <label for="price_monthly_discount"><b>Скидка на пребывание дольше месяца (в процентах)</b></label>
                <input id="price_monthly_discount" type="text" name="price_monthly_discount" placeholder="20" required>
            </div>
            <div>
                <label><b>Удобства</b></label>
                <div class="container">
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_wifi" name="amenity_wifi" value="true">
                        <label for="amenity_wifi"><span>Беспроводной интернет</span></label>
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_pets_allowed" name="amenity_pets_allowed" value="true">
                        <label for="amenity_pets_allowed"><span>Животные разрешены</span></label>
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_tv" name="amenity_tv" value="true">
                        <label for="amenity_tv"><span>ТВ</span></label>
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_kitchen" name="amenity_kitchen" value="true">
                        <label for="amenity_kitchen"><span>Кухня</span></label>
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_breakfast" name="amenity_breakfast" value="true">
                        <label for="amenity_breakfast"><span>Завтрак</span></label>
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" id="amenity_laptop" name="amenity_laptop" value="true">
                        <label for="amenity_laptop"><span>Рабочее пространство для компьютера</span></label>
                    </div>
                </div>
            </div>
            <div class="box">
                
					<input type="file" name="files[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} выбрано" required multiple />
					<label for="file-1" class="download-label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                        </svg>
                        <span>Выберите одно или несколько изображений&hellip;</span>
                    </label>
				</div>
            <div class="form-control">
                <label for="about"><b>Описание</b></label>
                <textarea id="about" name="about" style="margin: 0px; width: 946px; height: 265px;" required></textarea>
            </div>
            <div class="form-control listing-create-button">
                <button type="submit">Опубликовать</button>
            </div>
        </form>
    </div>
</template>
<script>

    export default {
        data() {
            return {
                csrf_token: window.csrf_token
            }
        },
        methods: {
            changeImageLabel: function () {
                    console.log('fdfsfsfs');
                    var inputs = document.querySelectorAll( '.inputfile' );
                    console.log(inputs);
	                Array.prototype.forEach.call( inputs, function( input ){
                        console.log('11111111');
		                var label	 = input.nextElementSibling,
			            labelVal = label.innerHTML;

		                input.addEventListener( 'change', function( e ) {
                            console.log('22222222');
			                var fileName = '';
			                if( this.files && this.files.length > 1 )
				                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			                else
				                fileName = e.target.value.split( '\\' ).pop();

			                if( fileName )
				                label.querySelector( 'span' ).innerHTML = fileName;
			                else
				                label.innerHTML = labelVal;
		                });

		                // Firefox bug fix
		                input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		                input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	                });
            }
        },
        mounted(){
            this.changeImageLabel();
        }
    }
</script>
<style>
    #login form {
        padding-top: 40px;
    }

    @media (min-width: 744px) {
        #login form {
            padding-top: 80px;
        }
    }

    #login .form-control {
        margin-bottom: 1em;
    }

    #login input[type=text],
    #login input[type=email],
    #login input[type=password],
    #login button,
    #login label {
        width: 100%;
        font-size: 19px !important;
        line-height: 24px;
        color: #484848;
        font-weight: 510;
        -webkit-appearance: none;
    }

    #login input {
        background-color: transparent;
        padding: 11px;
        border: 1px solid #dbdbdb;
        border-radius: 2px;
        box-sizing:border-box
    }

    #login button {
        background-color: #4fc08d;
        color: #ffffff;
        cursor: pointer;
        border: #4fc08d;
        border-radius: 4px;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    @media (min-width: 374px){
        .listing-create-container {
            width: 50%;
        }
    }
    .listing-create-container {
    margin: 0 auto;
    padding: 0 12px;
    }
    .box {
    margin-bottom: 6px;
    /* background-color: #dfc8ca;
    padding: 6.25rem 1.25rem; */
    }
    .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
    }
    .inputfile-1 + label {
    color: #f1e5e6;
    background-color: #4fc08d;
    }
    .inputfile + label {
    max-width: 96%;
    font-size: 1.25rem;
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    /* padding: 0.625rem 1.25rem; */
    }
    .inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    margin-right: 0.25em;
    }
    svg:not(:root) {
    overflow: hidden;
    }
    .download-label {
    padding-top: 11px;
    padding-left: 40px;
    height: 37px;
    width: 911px;
    color: white !important;
    border: #4fc08d;
    border-radius: 4px;
    }
    .listing-create-button {
        font-weight: 510;
    }
    .container {
        margin-top: 15px;
        margin-bottom: 19px;
    }
    .checkbox {
  width: 100%;
  margin: 15px auto;
  position: relative;
  display: block;
}
.checkbox label {
  position: relative;
  min-height: 34px;
  display: block;
  padding-left: 40px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.checkbox label span {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.checkbox label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  margin: 4px;
  width: 22px;
  height: 22px;
  transition: transform 0.28s ease;
  border-radius: 3px;
  border: 2px solid #34c37a;
}
.checkbox label:after {
  content: "";
  display: block;
  width: 10px;
  height: 5px;
  border-bottom: 2px solid #34c37a;
  border-left: 2px solid #34c37a;
  transform: rotate(-45deg) scale(0);
  transition: transform ease 0.25s;
  position: absolute;
  top: 12px;
  left: 10px;
}
.checkbox input[type="checkbox"] {
  width: auto;
  opacity: 0.00000001;
  position: absolute;
  left: 0;
  margin-left: -20px;
}
.checkbox input[type="checkbox"]:checked ~ label:before {
  border: 2px solid #34c37a;
}
.checkbox input[type="checkbox"]:checked ~ label:after {
  transform: rotate(-45deg) scale(1);
}
.checkbox input[type="checkbox"]:focus + label::before {
  outline: 0;
}

.js .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.no-js .inputfile + label {
    display: none;
}
</style>
