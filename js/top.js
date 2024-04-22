$(function() {


/* sns
	/*----------------------------------------------------------*/
  var shareUrl = encodeURIComponent('https://www.nintendo.co.jp/switch/acbaa/index.html');
  var shareTitle = encodeURIComponent('Nintendo Switch『あつまれ どうぶつの森』の公式サイトです。');
	$('.c-sns__twitter a').attr('href', 'http://twitter.com/share?url=' + shareUrl + '&text=' + shareTitle);
	$('.c-sns__facebook a').attr('href', 'http://www.facebook.com/share.php?u=' + shareUrl);
	$('.c-sns__twitter a, .c-sns__facebook a').on('click', function(e) {
		e.preventDefault();
		popupWindow($(this).attr('href'));
	});

  function popupWindow(url) {
    window.open(url, '', 'width=650,height=550,menubar=no,toolbar=no,scrollbars=yes');
  }

});

$(function() {
  $(window).on('load', function() {
    $('.p-top-visual').addClass('is-show');
    //$('.p-top-shimadayori').scrollClass();
    $('.p-top-slowlife__inner a img').scrollClass();
    $('.p-top-guid__inner  a img').scrollClass();
    $('.p-top-namelist__inner').scrollClass();
    $('.p-top-portal__inner').scrollClass();
    $('.p-top-tanuki-kaihatsu').scrollClass();
  });

  // birthday
  var currentDate = new Date();
  var currentmm = adjust_digits((currentDate.getMonth() + 1), 2);
  var currentdd = adjust_digits(currentDate.getDate(), 2);
  var currentmmdd = currentmm + currentdd;
  var birthImg = $('<img>').attr('src', '/switch/acbaa/assets/images/top/birthday/' + currentmmdd + '.png');
  $('#js-birthday').append(birthImg);
});


/* timeline
/*----------------------------------------------------------*/
$(function(){

  /* 変数用意
  /*----------------------------------------------------------*/
  var modalInnerSwiper = [];
  var videos = [];
  var getPage = 1;
  var nextData;
  var currentData;
  var isFirst = true;
  var isLast = false;
  var isLastGet = false;
  var isLastData = false;
  var isFirstHalf = true;
  var API_URL = 'https://api.shuttlerock.com/v2/doubutsunomori/entries?page=';
  var timelineSwiper, modalSwiper;

  /* スライダー init
  /*----------------------------------------------------------*/
  function sliders(){

    /* timeline一覧のスライダー設定
    /*----------------------------------------------------------*/
    timelineSwiper = new Swiper ('.swiper-container', {
        loop: false,
        freeMode: true,
        slidesPerView: 'auto',
        // slidesPerGroup: 5,
        draggable: true,
        spaceBetween: 30,
        // iOSEdgeSwipeDetection: true,
        breakpoints: {
          767: {
            slidesPerView: 'auto',
            // slidesPerGroup: 1,
          }
        },
        scrollbar: {
          el: '.c-slider-nav-bar',
          hide: false,
          draggable: true,
          snapOnRelease: false
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    /* timelineモーダルのスライダー設定
    /*----------------------------------------------------------*/
    modalSwiper = new Swiper ('.timeline-modal-container', {
        wrapperClass: 'timeline-modal-list',
        slideClass: 'timeline-modal-item',
        loop: false,
        freeMode: false,
        //watchOverflow: true,
        slidesPerView: 1,
        draggable: false,
        // iOSEdgeSwipeDetection: true,
        breakpoints: {
            767: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        },
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        //   hide: false,
        //   draggable: true
        // },
        navigation: {
            nextEl: '.timeline-modal-nav-next',
            prevEl: '.timeline-modal-nav-prev',
        },
        // pagination: {
        //     el: '.swiper-pagination',
        // },
        on: {
          slideChange: function () {
            videoStop()
            if(modalSwiper.activeIndex % (modalSwiper.slides.length - 1) == 0){
              moreTimeline('.timeline-more-button');
            }
          },
        }
    });
  }

  /* アイテムをクリックしたらモーダル立ち上げ・モーダル閉じる
  /*----------------------------------------------------------*/
  $(document).on('click', '.timeline-card:not(".timeline-more")', function(){
    $('body').addClass('is-modal');
    var num = $('.timeline-card').index(this);
    modalSwiper.slideTo(num);
    $('.c-modal-frame').addClass('is-visible');
  });

  $('.c-modal-close').on('click', function(){
    $('body').removeClass('is-modal');
    $('.c-modal-frame').removeClass('is-visible');
  });

  $(document).on('click', '.timeline-sub-modal-open', function(){
    var id = $(this).attr('data-id');
    $('.c-sub-modal-frame').addClass('is-visible');
    $('.c-sub-modal-item').removeClass('is-visible');
    $('#'+ id +'').addClass('is-visible');
  });

  $(document).on('click', '.c-sub-modal-close', function(){
    $('.c-sub-modal-frame').removeClass('is-visible');
    $('.c-sub-modal-item').removeClass('is-visible');
  });

  /* もっとみるを押した時の処理
    /*----------------------------------------------------------*/
  $(document).on('click', '.timeline-more-button', function(){
    moreTimeline(this);
  });

  function moreTimeline(object){
    modalInnerSwiper = [];
    $(object).parent('.c-slider-item').remove();

    currentData = nextData;

    $.when(
      appendTimeline(currentData)
    ).then(function(){
      modalSwiper.update();
      timelineSwiper.update();
    })

    getPage = getPage + 1;
    nextDataGet();

      // if(isLastData){
      //   $('.timeline-more-button').remove();
      //   timelineSwiper.update();
      // }

    // if(isFirstHalf){
    //   // 後半を表示
    //   isFirstHalf = false;
    //   appendTimeline(currentData);


    //   if(isLastData){
    //     $('.timeline-more-button').remove();
    //     timelineSwiper.update();
    //   }

    //   if(isLastGet){
    //     $('.timeline-more-button').remove();
    //     timelineSwiper.update();
    //   }else{
    //     getPage = getPage + 1;
    //     nextDataGet();
    //   }

    // }else{
    //   // 前半を表示
    //   isFirstHalf = true;
    //   appendTimeline(currentData);

    //   if(isLastData){
    //     $('.timeline-more-button').remove();
    //     timelineSwiper.update();
    //   }
    // }
  }

  function videoPlay(object){
    $(object).prev('video')[0].play();
    $(object).remove();
  }

  function videoStop(){
    for (var i = 0; i < videos.length; i++) {
      $('#'+videos[i])[0].pause();
    }
  }



  $('.c-modal-close').on('click', function(){
    videoStop()
  });

  $('.timeline-modal-nav-next').on('click', function(){
    videoStop()
  });

  $('.timeline-modal-nav-prev').on('click', function(){
    videoStop()
  });

  $(document).on('click', '.timeline-modal-media-video-play', function(){
    videoPlay(this)
  });

  /* 次ページのデータを取得
    /*----------------------------------------------------------*/
  function nextDataGet(){
    function getData(){
      return new Promise(function (resolve, reject) {
        var url = API_URL + getPage;
        var data = $.getJSON(url);
        resolve(data);
      });
    }

    getData().then(function(data){
      nextData = data;
      nextDataCheck(nextData);
    });
  }

  function nextDataCheck(data){
    if(data.length < 20){
      isLast = true;
    }
  }

  /* timelineに要素を追加
  /*----------------------------------------------------------*/
  function appendTimeline(data){

    var moreHTML = '<div class="swiper-slide c-slider-item is-loaded timeline-card timeline-more is-pc"><button class="timeline-more-button"><img src="assets/images/top/timeline-more_btn__pc_off.png" alt="もっと見る"></button></div>';


    for(var i = 0; i < data.length; i++){
      if(data[i]){
        $('#timeline-cards').append(createCard(data[i]));
        $('#timeline-modal').append(createModal(data[i]));
        $('#timeline-sub-modal').append(createSubModal(data[i]));
      }
    }
    if(!isLast){
      $('#timeline-cards').append(moreHTML);
    }

    if(isFirst){
      isFirst = false;
      sliders();
    }

    modalSwiper.update();
    timelineSwiper.update();

    setTimeout(function(){
      $('.c-slider-item').addClass('is-loaded');
    }, 500);

    if(modalInnerSwiper.length > 0){
      $.each(modalInnerSwiper, function(index, el) {
        $('.'+el).not('.slick-initialized').slick({
          dots: true,
          arrows: false,
          infinite: false
        });
      });
    }
  }

  /* 初回の処理
  /*----------------------------------------------------------*/
  function asyncFunction() {
    return new Promise(function (resolve, reject) {
      var url = API_URL + getPage;
      var data = $.getJSON(url);
      resolve(data);
    });
  }

  asyncFunction().then(function(data){
    currentData = data;

    if(currentData.length < 20){
      isLast = true;
    }
    getPage = getPage + 1;
    nextDataGet();
    $.when(
      appendTimeline(currentData)
    ).then(function(){
      modalSwiper.update();
      timelineSwiper.update();
    })
  }).catch(function(error){
  });


  /* timelineの一覧htmlを作成
  /*----------------------------------------------------------*/
  function createCard(data){
    if(data != ''){
      var d = {
        img: data.images.show,
        txt: data.details.description,
        date: data.details.created_at,
        slider: data.carousel
      }
      if(d.txt.indexOf('pic.') > 0){d.txt = d.txt.substr(0, d.txt.indexOf('pic.'));}
      d.date = d.date.substr(0, 10).replace(/-/g, '.');
      d.date = d.date.substr(0, 10).replace(/\.0/g, '.');

      var html = '';
      html += '<section class="swiper-slide c-slider-item timeline-card">';
      html += '<div class="timeline-card-link">';
      html += '<div class="timeline-card-inside">';
      if(d.slider != undefined && d.slider.length > 0 && d.slider.length < 4){
        if(d.slider.length == 1){
          html += '<div class="timeline-card-thumb timeline-card-thumb--2">';
        }
        if(d.slider.length == 2){
          html += '<div class="timeline-card-thumb timeline-card-thumb--3">';
        }
        if(d.slider.length == 3){
          html += '<div class="timeline-card-thumb timeline-card-thumb--4">';
        }
        html += '<figure class="timeline-card-thumb-item"><div><img src="' + d.img + '"></div></figure>';
        for(var i = 0; i < d.slider.length; i++){
          html += '<figure class="timeline-card-thumb-item"><div><img src="' + d.slider[i].images.show + '"></div></figure>';
        }
        html += '</div>';
      }else{
        if(d.img == '' || d.img === undefined){
          html += '<figure class="timeline-card-thumb"><img src="assets/images/top/noimage.jpg" alt=""></figure>';
        }else{
          html += '<figure class="timeline-card-thumb"><img src="' + d.img + '" alt=""></figure>';
        }
      }
      html += '<div class="timeline-card-body">';
      html += '<h3 class="timeline-card-title">' + d.txt + '</h3>';
      html += '<p class="timeline-card-date">' + d.date + '</p>';
      html += '</div></div></div>';
      html += '<div class="timeline-pin"><img src="assets/images/top/timeline_pin.png" alt=""></div>';
      html += '</section>';
      return html;
    }
  }

  /* timelineのモーダルhtmlを作成
  /*----------------------------------------------------------*/
  function createModal(data){
    if(data != ''){
    var d = {
        id: data.id,
        img: data.images.show,
        txt: data.details.html_description,
        date: data.details.created_at,
        movie: data.source.url,
        slider: data.carousel
      }

      if(d.txt.indexOf('pic.') > 0){d.txt = d.txt.substr(0, d.txt.indexOf('pic.'));}
      d.date = d.date.substr(0, 10).replace(/-/g, '.');
      d.date = d.date.substr(0, 10).replace(/\.0/g, '.');

      var html = '';

      html += '<section class="timeline-modal-item is-active">';

      if(d.movie.indexOf('.mp4') > 0){
        html += '<div class="timeline-modal-media mod-video">';
        html += '  <div class="timeline-modal-media-video">';
        html += '    <video id="' + d.id + '" src="' + d.movie + '" poster="' + d.img + '" controls="controls" preload="none" controlslist="nodownload" disablepictureinpicture=""></video>';
        html += '    <div class="timeline-modal-media-video-play"></div>';
        html += '  </div>';
        html += '</div>';
        videos.push(d.id);

      }else if(d.slider != undefined && d.slider.length > 0){
        if(d.slider.length > 3){
          html += '<div class="timeline-modal-media mod-carousel">';
          html += '<div class="nested-slider-container">';
          html += '<div class="nested-slider-wrapper ' + d.id + '">';
          html += '<div class="nested-slider-slide"><img src="' + d.img + '"></div>';
          for(var i = 0; i < d.slider.length; i++){
            html += '<div class="nested-slider-slide"><img src="' + d.slider[i].images.show + '"></div>';
          }
          html += '</div>';
          html += '</div>';
          html += '</div>';

          modalInnerSwiper.push(d.id);
        }else{
          html += '<div class="timeline-modal-media mod-photo">';
          html += '<div class="timeline-modal-media-frame">';
          if(d.slider.length == 1){
            html += '<div class="timeline-modal-media-image timeline-modal-media-image--2">';
          }
          if(d.slider.length == 2){
            html += '<div class="timeline-modal-media-image timeline-modal-media-image--3">';
          }
          if(d.slider.length == 3){
            html += '<div class="timeline-modal-media-image timeline-modal-media-image--4">';
          }
          html += '<div class="timeline-modal-media-image-item timeline-sub-modal-open" data-id="' + d.id + '-' + 0 + '"><div><img src="' + d.img + '" alt=""></div></div>';
          for(var i = 0; i < d.slider.length; i++){
            html += '<div class="timeline-modal-media-image-item timeline-sub-modal-open" data-id="' + d.id + '-' + (i+1) + '"><div><img src="' + d.slider[i].images.show + '" alt=""></div></div>';
          }
          html += '</div>';
          html += '</div></div>';
        }
      }else{
        html += '<div class="timeline-modal-media mod-photo">';
        html += '<div class="timeline-modal-media-frame">';
        if(d.img == '' || d.img === undefined){
          html += '<div class="timeline-modal-media-image">';
          html += '<img src="assets/images/top/noimage.jpg" alt="">';
        }else{
          html += '<div class="timeline-modal-media-image timeline-sub-modal-open" data-id="' + d.id + '-' + 0 + '">';
          html += '<img src="' + d.img + '" alt="">';
        }
        html += '</div>';
        html += '</div></div>';
      }

      html += '<div class="timeline-modal-description">' + d.txt + '</div>';
      html += '<p class="timeline-modal-date">' + d.date + '</p>';
      html += '</section>';

      return html;
    }
  }

  /* timelineのサブモーダルhtmlを作成
  /*----------------------------------------------------------*/
  function createSubModal(data){
    if(data != ''){
    var d = {
        id: data.id,
        img: data.images.large_1200,
        txt: data.details.html_description,
        date: data.details.created_at,
        movie: data.source.url,
        slider: data.carousel
      }

      if(d.txt.indexOf('pic.') > 0){d.txt = d.txt.substr(0, d.txt.indexOf('pic.'));}
      d.date = d.date.substr(0, 10).replace(/-/g, '.');
      d.date = d.date.substr(0, 10).replace(/\.0/g, '.');

      var html = '';

      if(d.movie.indexOf('.mp4') > 0){

      }else if(d.slider != undefined && d.slider.length > 0){
        if(d.slider.length > 3){

        }else{
          html += '<div class="c-sub-modal-item" id="' + d.id + '-' + 0 + '">';
          html += '<div class="c-sub-modal-image"><img src="' + d.img + '" alt=""></div>';
          html += '<button type="button" class="c-sub-modal-close"><img src="assets/images/top/modal_close.png" alt="閉じる"></button>';
          html += '</div>';
          for(var i = 0; i < d.slider.length; i++){
            html += '<div class="c-sub-modal-item" id="' + d.id + '-' + (i+1) + '">';
            html += '<div class="c-sub-modal-image"><img src="' + d.slider[i].images.large_1200 + '" alt=""></div>';
            html += '<button type="button" class="c-sub-modal-close"><img src="assets/images/top/modal_close.png" alt="閉じる"></button>';
            html += '</div>';
          }
          html += '</div>';
        }
      }else{
        if(d.img == '' || d.img === undefined){

        }else{
          html += '<div class="c-sub-modal-item" id="' + d.id + '-' + 0 + '">';
          html += '<div class="c-sub-modal-image"><img src="' + d.img + '" alt=""></div>';
          html += '<button type="button" class="c-sub-modal-close"><img src="assets/images/top/modal_close.png" alt="閉じる"></button>';
          html += '</div>';
        }
      }

      return html;
    }
  }

});
