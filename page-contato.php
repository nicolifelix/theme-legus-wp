<?php include('header.php'); ?>

<main id="legus"  class="wrapper">

        <section class="LegusSection-banner">
            <div class="LegusElement-banner">   
                <img class="LegusElement-banner__image" src="./assets/img/banners/banner-1.jpeg" alt="" srcset="">
            </div>        
        </section>

        <section class="LegusSection-content__img">
            <div class="row"> 
                <div class="col-md-5 col-sm-11">
                   <div class="LegusElement-text">
                        <h1>
                            Contato
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis ultricies gravida. Pellentesque non libero id quam placerat interdum ut non dolor. Morbi convallis pulvinar tincidunt. Etiam tristique, dui eget posuere consequat, lectus leo efficitur eros, et elementum nulla mi fringilla mi. Curabitur sollicitudin blandit luctus. 
                        </p>
                   </div>
                </div>  
                <div class="col-md-5 col-sm-11">
                    <div class="LegusElement-form">
                        <form>
                            <div class="form-group mb-5">
                                <label for="InputName">Nome Completo</label>
                                <input type="text" class="form-item" id="InputName" aria-describedby="Nome Completo" >
                                
                            </div>
                            <div class="form-group mb-5">
                                <label for="InputEmail">E-mail</label>
                                <input type="text" class="form-item" id="InputEmail" >
                            </div>
                            <div class="form-group mb-5">
                                <label for="InputTelephone">Telefone/WhatsApp</label>
                                <input type="text" class="form-item" id="InputTel" >
                            </div>
                            <div class="form-group mb-5">
                                <label for="formControlRange">Metragem do Apartamento</label>
                                <div class="row metragem">
                                    <span>30mt²</span>
                                    <span>40mt²</span>
                                    <span>50mt²</span>
                                    <span>60mt²</span>
                                    <span>70mt² <br> ou +</span>
                                </div>
                                <div class="row metragem">
                                    <span>|</span>
                                    <span>|</span>
                                    <span>|</span>
                                    <span>|</span>
                                    <span>|</span>
                                </div>
                                <input type="range" min="0" max="4" step="1" class="form-control-range" id="formControlRange">
                            </div>
                            <div class="form-row mb-5 row planta">
                                <div class="col-md-5 col-sm-12 mb-5">
                                    <label for="customRange2" class="form-label" >Possui planta?</label>
                                    <div class="row metragem">
                                        <label for="radio-one" class="form-radio-hidden">
                                            <input type="radio" name="demo" value="one" id="radio-one" checked>
                                            <span class="radio"></span>
                                            <span class="text">SIM</span>
                                        </label>
                                        <label for="radio-two" class="form-radio-hidden">
                                            <input type="radio" name="demo" value="one" id="radio-two">
                                            <span class="radio"></span>
                                            <span class="text">NÃO</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 mb-5">
                                    <label for="formControlRange">Envie sua planta</label>
                                    <button id="addFile" class="btn btn-legus submit" type="submit">Enviar</button>
                                </div>
                            </div>

                            <div class="form-group mb-5">
                                <label for="comments">Comentários</label>
                                <textarea type="text" class="form-item" id="InputComment" ></textarea>
                            </div>
                            <div class="row">
                                <button class="btn btn-legus" type="submit">Enviar</button>
                            </div>
                        </form>
                </div>
                </div>
            </div>        
        </section>

    </main>
    
<?php include('footer.php'); ?>