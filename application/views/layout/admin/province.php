<script>

        var $mys,sy,id_val,ct_val;

        $.getJSON("<?php echo base_url('province.json');?>", function(json){
            // console.log(json);
            $.each(json,function(k,v){
                $('#provinsi').append(`<option >${v.province}</option>`);
            });

            $('#kabupaten').html("");
            $.each(json,function(k,v){
                if(v.province == $('#provinsi').val()){
                    $.each(v.city,function(n,i){
                            $('#kabupaten').append(`<option >${i.city_name}</option>`);
                    });
                }
            });

            $('#provinsi').change(function(){
                $('#kabupaten').html("");
                var def = $(this).val();
                $.each(json,function(k,v){
                    if(v.province == def){
                        $.each(v.city,function(n,i){
                            $('#kabupaten').append(`<option >${i.city_name}</option>`);
                        });
                    }
                });
            });

        });

        //  $('#location').click(function(e){
        //      e.preventDefault();
        //      $('.overlay').css('display','block');
        //      $('.modls').css('display','block');
        //      $('.loader').css('display','block');
        //      $.getJSON("<?php echo base_url('province.json');?>", function(json){
        //          console.log(json);
        //          //kosongkan div agar tidak terjadi loop berlebihan
        //          $('.my-pg').html("");
        //          $.each(json,function(i,v){
        //              $('.modls .my-pg').append(`<li id="sk-${v.province_id}" ><a href="#"  data-value="${v.province_id}" > ${v.province} </a></li>`);
        //           });

        //          //group .my-pg li saat li >= 8
        //          sy = $('.my-pg li')
        //          for(var i = 0; i < sy.length; i+=8) {
        //              sy.slice(i, i+8).wrapAll("<div class='wrap'></div>");
        //          }

        //          //append all province
        //         //  $('.my-pg .wrap:first-child').prepend(`<li id="sk-11" ><a id="all" href="#"  data-value="all location" ><b>All Location</b></a></li>`);

        //          $('.my-pg .wrap li #all').click(function(){
        //             var test = $(this).data('value');
        //             $('#kabupaten').val(test);
        //             $('.overlay').css('display','none');
        //             $('.modls').css('display','none');
        //          });

        //          $('.my-pg .wrap li a').click(function(e){
        //              e.preventDefault();
        //          //get data-value $(this)
        //          var myvl = $(this).data('value');
        //          //kosongkan .my-pg
        //          $('.modls .my-pg').addClass('hidden');
        //          //masukan kota
        //          $.each(json,function(i,v){
        //              //jika provinsi = kota
        //              if( myvl == v.province_id ){
        //                  $.each(v.city,function(k,d){
        //                      //masukan ke class .list-city
        //                      $('.myls-ct').append(`<li id="sk-${d.city_id}"><a data-value="${d.city_name}" data-prov="${v.province}" href="#">${d.city_name}</a></li>`);
        //                  });
        //              };

        //          });

        //          $('#back').css('display','block');
        //           //group .list-city li saat dan slice li >= 8
        //          sk = $('.myls-ct li')
        //          for(var i = 0; i < sk.length; i+=8) {
        //              sk.slice(i, i+8).wrapAll("<div class='wrap'></div>");
        //          }

        //          //memasuk value kedalam input location
        //          $('.myls-ct li a').click(function(e){
        //              e.preventDefault();
        //             var test = $(this).data('value');
        //             var prov = $(this).data('prov');
        //             $('#location').val(`${prov},${test}`);
        //             $('#kabupaten').val(test);
        //             $('#provinsi').val(prov);
        //             $('.overlay').css('display','none');
        //             $('.modls').css('display','none');
        //          });

        //          });

        //          //kembali ke province
        //          $('#back').click(function(e){
        //              e.preventDefault();
        //              $('.modls .my-pg').removeClass('hidden');
        //              $('.list-city .myls-ct').html("");
        //              $('#back').css('display','none');
        //          });

        //      });
        //  });


</script>