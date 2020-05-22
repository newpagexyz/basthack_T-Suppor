



 <style>
        body {
            background-image: -webkit-gradient(linear, right top, left bottom, from(#F2E3C6), to(#A7A1A5));
            background-image: linear-gradient(to left bottom, #F2E3C6 0%, #A7A1A5 100%);
        }
        .btn {
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    whitespace: nowrap;
    padding: 6px 12px;
    font-size: 1.4rem;
    border-radius: 3px;
    border: 1px solid transparent;
    text-decoration: none;
    user-select: none;
    &,
    &:active,
    &.active {
        &:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }
    }
    &:hover,
    &:focus,
    &.focus {
        text-decoration: none;
        color: #fff;
    }
    &:active,
    &.active {
        outline: 0;
        background-image: none;
    }
    &.disabled,
    &[disabled],
    fieldset[disabled] & {
        cursor: not-allowed;
        pointer-events: none;
        box-shadow: none;
    }
    &.btn-xs {
        padding: 3px 6px;
        font-size: 1.2rem;
    }
    &.btn-sm {
        padding: 4px 8px;
        font-size: 1.3rem;
    }
    &.btn-lg {
        padding: 8px 16px;
        font-size: 1.6rem;
    }
}

@mixin btn-variant($border, $from, $to, $gloss, $color, $hover-from, $active-border) {
    color: $color;
    border-color: $border;
    background: linear-gradient(to bottom, $from 0%, $to 100%);
    box-shadow: inset 0 1px $gloss, 0 1px 2px rgba(0, 0, 0, .2);
    &:hover,
    &:focus,
    &.focus {
        border-color: $to;
        background: linear-gradient(to bottom, $hover-from 0%, $from 100%);
        box-shadow: inset 0 1px $color, 0 2px 3px rgba(0, 0, 0, .2);
    }
    &:active,
    &.active {
        border-color: $active-border;
        color: $gloss;
        background: linear-gradient(to bottom, $to 0%, $border 100%);
        box-shadow: inset 0 2px 2px $active-border;
    }
    &.disabled,
    &[disabled],
    fieldset[disabled] & {
        background: $hover-from;
        border-color: $from;
    }
}

@mixin btn-flat($active, $hover, $normal, $active-color, $color, $disabled) {
    color: $color;
    border-color: transparent;
    background: $normal;
    box-shadow: none;
    &:hover,
    &:focus,
    &.focus {
        border-color: transparent;
        color: #fff;
        background: $hover;
        box-shadow: none;
    }
    &:active,
    &.active {
        border-color: $active;
        color: $active-color;
        background: $active;
        box-shadow: none;
    }
    &.disabled,
    &[disabled],
    fieldset[disabled] & {
        background: $disabled;
        border-color: $disabled;
    }
}

.btn-default {
    @include btn-variant(#546e7a, #90a4ae, #78909c, #cfd8dc, #eceff1, #b0bec5, #455a64);
    &.btn-flat {
        @include btn-flat(#546e7a, #90a4ae, #78909c, #cfd8dc, #eceff1, #b0bec5);
    }
}

.btn-primary {
    @include btn-variant(#1e88e5, #64b5f6, #42a5f5, #bbdefb, #e3f2fd, #90caf9, #1976d2);
    &.btn-flat {
        @include btn-flat(#1e88e5, #64b5f6, #42a5f5, #bbdefb, #e3f2fd, #90caf9);
    }
}

.btn-success {
    @include btn-variant(#43A047, #81C784, #66BB6A, #C8E6C9, #E8F5E9, #A5D6A7, #388E3C);
    &.btn-flat {
        @include btn-flat(#43A047, #81C784, #66BB6A, #C8E6C9, #E8F5E9, #A5D6A7);
    }
}

.btn-info {
    @include btn-variant(#00ACC1, #4DD0E1, #26C6DA, #B2EBF2, #E0F7FA, #80DEEA, #0097A7);
    &.btn-flat {
        @include btn-flat(#00ACC1, #4DD0E1, #26C6DA, #B2EBF2, #E0F7FA, #80DEEA);
    }
}

.btn-warning {
    @include btn-variant(#FB8C00, #FFB74D, #FFA726, #FFE0B2, #FFF3E0, #FFCC80, #F57C00);
    &.btn-flat {
        @include btn-flat(#FB8C00, #FFB74D, #FFA726, #FFE0B2, #FFF3E0, #FFCC80);
    }
}

.btn-danger {
    @include btn-variant(#F4511E, #FF8A65, #FF7043, #FFCCBC, #FBE9E7, #FFAB91, #E64A19);
    &.btn-flat {
        @include btn-flat(#F4511E, #FF8A65, #FF7043, #FFCCBC, #FBE9E7, #FFAB91);
    }
}
    </style>


    <section class="ot" style="padding:0 10%  ;text-align: center; ">



        <div class="hero-body">
            <div class="container " style="text-align: center; background-color: #1ec4da; height: 100px;">
                <h1 class="col-sm-6 is-size-3" style="color: white; padding-top: 30px ;text-align: center;">Личный кабинет</h1>


            </div>
            <div class="box">

                <div class="field-body" style="">
                    <div class="field">
                        <div class="control">
                            <h2 class="is-size-4" style="margin-bottom: 20px;"><b>Личная информация</h2>



                                <div class="columns is-centered ">

                                    
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">

                    
                                    <div class="column is-autos" style="text-align: center">
                    
                                        <div class="container" style="">
                                            <div class="columns is-gapless is-multiline is-mobile" style="">
                
                                                    <div class="column is-narrow">
                                                        <label class="label" style="margin-top: 5px; font-weight: normal ;">&nbsp;&nbsp;&nbsp;Имя:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    </div>
                                                    <div class="column is-half">
                                                     <?php echo" <input type='text' class='input' id='name' name='name' required value='".$arr['name']."'>" ?>
                                                    </div>
                                                </div>
                                                <div class="columns is-gapless is-multiline is-mobile" style="">
                
                                                    <div class="column is-narrow">
                                                        <label class="label" style="margin-top: 5px; font-weight: normal ;">Фамилия:&nbsp;&nbsp;</label>
                                                    </div>
                                                    <div class="column is-half">
                                                        <?php echo" <input type='text' class='input' id='name' name='surname' required value='".$arr['surname']."'>" ?>
                                                    </div>
                                                </div>
                                                <div class="columns is-gapless is-multiline is-mobile" style="">
                
                                                    <div class="column is-narrow">
                                                        <label class="label" style="margin-top: 5px; font-weight: normal ;">Отчество:&nbsp;&nbsp;</label>
                                                    </div>
                                                    <div class="column is-half">
                                                        <?php echo"<input type='text' class='input' id='patronymic' name='patronymic' value='".$arr['patronymic']."'>"; ?>
                                                    </div>
                                                    
                                                </div>
                                                



                                            </div>
                                       
                    
                                    </div>
                                    <img id="_image " src="
										<?php 
											if($arr['image']!=null or $arr['image']!=false){
												echo"../img/user_icon/".$arr['image'];
											}
											else{
												echo"../img/default/no_img.png";
											}
									?>" style="width: 20vw; height: 30vh">
									<form action='' method='post' enctype='multipart/form-data'>
									<input name='userfile' type='file' required>
									<input  type='submit' value='поменять'  style="background-color: #25c7d9; border-radius: 5px;color: white;font-weight: normal ;">
									</form>

                                </div>
                                    </div>
                                    
                                </div>
                              






                                <form action='' method='post'>
                        </div>
                        <div class="control" style="margin-top: 30px;">
                            <h2 class="is-size-4" style="margin-bottom: 30px;"><b>Контакты</h2>



                                <div class="columns is-centered ">

                                    
                    
                    
                                    <div class="column is-autos" style="text-align: center">
                    
                                        <div class="container" style="">
                                            <div class="columns is-gapless is-multiline is-mobile" style="">
            
                                                <div class="column is-narrow">
                                                    <label class="label" style="margin-top: 5px;font-weight: normal ;">Телефон:&nbsp;&nbsp;</label>
                                                </div>
                                                <div class="column is-auto" style="margin-right: 10%;">
                                                    <?php echo "<input type='text' class='input' id='patronymic' name='phone' value='".$arr['phone']."'>";?>
                                                </div>
                                            </div>
                                            <div class="columns is-gapless is-multiline is-mobile" style="">
            
                                                <div class="column is-narrow">
                                                    <label class="label" style="margin-top: 5px;font-weight: normal ;">Соцсети:&nbsp;&nbsp;</label>
                                                </div>
                                                <div class="column is-auto" style="margin-right: 10%;">
                                                    <?php echo"<input type='text' class='input' id='patronymic' name='vk_id' value='".$arr['vk_id']."'>";?> 
                                                </div>
                                            </div>
                                           



                                        </div>
                                       
                    
                                    </div>
                                    <div class="column is-auto ">
                                       
                    
                                    </div>
                                    
                                </div>
                      
                                <div class="columns is-centered" style="padding: 0 23%; margin-left: 0.1%;">
                                    <div class="column">
                                        <div class="button " style="background-color: #25c7d9; border-radius: 5px;color: white; margin-left: 20%; font-weight: normal ;">Сохранить</div>
                                    </div>
                                    <div class="column">
                                        <div class="button" style="background-color: #2373cc; border-radius: 5px;color: white; font-weight: normal ;" >Запросить</div>
                                    </div>
                
                                </div>





                                
                        </div>
                    </div>
                </div>
            </div>
