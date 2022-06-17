// Mock das informações que viram do servidor PHP
var mock = {
    // Conteúdo Fisica
    conteudos_1: [
      {
        value: "F9Bo89m2f6g",
        name: "Video 1"
      },
      {
        value: "AF7M17QX4QE",
        name: "Video 2"
      }
    ],
  
    // Conteúdo Matemática
    conteudos_2: [
      {
        value: "AZuVzQHllOc",
        name: "Video 1"
      },
      {
        value: "5kcdRBHM7kM",
        name: "Video 2"
      }
    ]
  };
  
  $(document).ready(function () {
    $("#disciplina").change(function () {
      // Este JSON pode ser substituído por
      // var conteudos = $.get('conteudo.php?disciplina='+$('#disciplina').val());
      var conteudos = mock["conteudos_" + $("#disciplina").val()];
  
      // Adiciona o option `Selecione o conteudo`
      $("#conteudo")
        .empty()
        .append(
          '<option value="" selected=selected>Selecione o conteúdo</option>'
        );
      $.each(conteudos, function (key, conteudo) {
        $("#conteudo")
          .append(
            "<option value=" + conteudo.value + ">" + conteudo.name + "</option>"
          );
      });
    });
  
    $("#conteudo").change(function () {
      var codigoVideo = $("#conteudo").val();
      var videoContainer = $("#video_container");
      videoContainer.html(`
      <iframe width="700" height="450" src="https://www.youtube.com/embed/${codigoVideo}" frameborder="0" allowfullscreen></iframe>`);
    });
  });