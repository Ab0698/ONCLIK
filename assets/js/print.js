
     
        (function () {  
            var  
             bloc_imprimer = $('#content'),  
             cache_width = bloc_imprimer.width(),  
             a4 = bloc_imprimer.width(); // for a4 size paper width and height  
      
            $('#telecharger').on('click', function () {   
                createPDF();  
            });  
            //create pdf  
            function createPDF() {  
                getCanvas().then(function (canvas) {  
                    var  
                     img = canvas.toDataURL("image/png"),  
                     doc = new jsPDF({  
                         unit: 'px',  
                         format: 'a4'
                     });  
                    doc.addImage(img, 'JPEG', 20, 20);  
                    doc.save('Mon modele CV.pdf');  
                    bloc_imprimer.width(cache_width);  
                });  
            }  
      
            // create canvas object  
            function getCanvas() {  
              bloc_imprimer.width((a4[0] * 0.33333) - 80).css('max-width', 'none');  
                return html2canvas(bloc_imprimer, {  
                    imageTimeout: 2000,  
                    removeContainer: true  
                });  
            }  
      
        }());  
