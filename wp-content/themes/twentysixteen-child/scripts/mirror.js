var benjamin = benjamin || {};
benjamin.dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

requirejs(["http://localhost/wp-content/themes/twentysixteen-child/scripts/jquery-2.2.3.min", "http://localhost/wp-content/themes/twentysixteen-child/scripts/skycons"], function(util) {
    jQuery(document).ready(function() {
        var data = benjamin.getWeather();
        skycons = new Skycons({
            "color": "white"
        });
        setInterval(function() {
            jQuery('#clock').load('http://localhost/wp-content/themes/twentysixteen-child/scripts/time.php')
        }, 1000);
    })

    benjamin.getWeather = function(type) {
        jQuery.ajax({
            dataType: 'jsonp',
            type: 'GET',
            async: true,
            url: 'https://api.forecast.io/forecast/a2efc3d0e5f7201976eab36bf3765d4b/51.596459,-0.254356?units=si&exclude=alerts,flags',
            success: function(data) {
                var a = data.currently;
                var b = data.minutely;
                var c = data.hourly;
                var d = data.daily;
                benjamin.updateCurrent(a);
            }
        })
    }

    benjamin.updateCurrent = function(data) {
        jQuery('#currentTemp').html('<h3>' + Math.round(data.temperature) + '&#8451;</h3><h4>' + data.summary + ' · feels like ' + Math.round(data.apparentTemperature) + '&#8451;</h4>');
        skycons.set("currentIcon", data.icon);
        skycons.play();
    }

    benjamin.updateDaily = function(data) {
        //jQuery( '#forecastSummary' ).html( '<h3>' + data.summary + '</h3>' );
        var b = "";
        for (i = 1; i < data.data.length; i++) {
            var a = new Date(data.data[i].time * 1000);
            b += '<div id="forecastDay"><h3>' + benjamin.dayNames[a.getDay()] + '</h3><canvas id="icon' + i + '" title="' + data.data[i].summary + '" width="150" height="150"></canvas></div>';
        }
        jQuery('#forecastDaily').html(b);
        for (i = 0; i < data.data.length; i++) {
            skycons.set("icon" + i, data.data[i].icon);
        }
        skycons.play();
    }
});