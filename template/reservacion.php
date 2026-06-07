 <!-- Reservation Start -->
 <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
     <div class="row g-0">
         <div class="col-md-4">
             <video class="w-100 h-100" controls poster="img/reserva.png">
                 <source src="img/reserva.mp4" type="video/mp4">
             </video>
         </div>
         <div class="col-md-6 bg-dark d-flex align-items-center">
             <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                 <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reserva</h5>
                 <h1 class="text-white mb-4">Reserva Tu Mesa Online</h1>

                 ```
                 <form id="reservaForm">
                     <div class="row g-3">

                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" id="name" placeholder="Nombre Completo" required>
                                 <label for="name">Nombre Completo</label>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" required>
                                 <label for="email">Correo Electrónico</label>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-floating date" id="date3" data-target-input="nearest">
                                 <input type="text" class="form-control datetimepicker-input"
                                     id="datetime"
                                     placeholder="Fecha y Hora"
                                     data-target="#date3"
                                     data-toggle="datetimepicker"
                                     required>
                                 <label for="datetime">Fecha y Hora</label>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-floating">
                                 <select class="form-select" id="select1">
                                     <option value="1">1 Persona</option>
                                     <option value="2">2 Personas</option>
                                     <option value="3">3 Personas</option>
                                     <option value="4">4 Personas</option>
                                     <option value="5">5 Personas</option>
                                     <option value="6">6 Personas</option>
                                     <option value="7">7 Personas</option>
                                     <option value="8">8 Personas</option>
                                     <option value="9">9 Personas</option>
                                     <option value="10">10 Personas</option>
                                 </select>
                                 <label for="select1">Número de Personas</label>
                             </div>
                         </div>

                         <div class="col-12">
                             <div class="form-floating">
                                 <textarea class="form-control"
                                     placeholder="Solicitud Especial"
                                     id="message"
                                     style="height: 100px"></textarea>
                                 <label for="message">Solicitud Especial</label>
                             </div>
                         </div>

                         <div class="col-12">
                             <button class="btn btn-primary w-100 py-3" type="submit">
                                 Reservar por WhatsApp
                             </button>
                         </div>

                     </div>
                 </form>

             </div>
             ```

         </div>

         <script>
             document.getElementById("reservaForm").addEventListener("submit", function(e) {

                 e.preventDefault();

                 let nombre = document.getElementById("name").value;
                 let email = document.getElementById("email").value;
                 let fecha = document.getElementById("datetime").value;
                 let personas = document.getElementById("select1").value;
                 let mensaje = document.getElementById("message").value;

                 let texto =
                     `🍽️ *NUEVA RESERVA*

                        👤 Nombre: ${nombre}
                        📧 Correo: ${email}
                        📅 Fecha y Hora: ${fecha}
                        👥 Personas: ${personas}
                        📝 Solicitud Especial: ${mensaje}`;

                 let url = "https://wa.me/51919473674?text=" + encodeURIComponent(texto);

                 window.open(url, "_blank");
             });
         </script>

     </div>
 </div>

 <!-- Reservation Start -->