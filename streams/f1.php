<html>
  <head>
    <meta charset="UTF-8">
    <title> F1 ANT1+ </title>
    <style>
      body{margin:0;};
    </style>
    <script id="_waud7t">var _wau = _wau || []; _wau.push(["dynamic", "xv4hm44bwm", "d7t", "c4302bffffff", "small"]);</script><script async src="//waust.at/d.js"></script>
        <link rel="stylesheet" href="https://foothubhd.xyz/cdn3/player3mute.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@0.3.13/dist/clappr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/level-selector@0.2.0/dist/level-selector.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-pip@0.2.0/dist/clappr-pip.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@0.1.1/dist/clappr-chromecast-plugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/console-ban@4.1.0/dist/console-ban.min.js"></script> 
<script>
// default options
ConsoleBan.init()
// custom options
ConsoleBan.init({
  redirect: 'https://www.google.gr/'
})
</script>
  <body>



<div id="player"></div>

<script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function (e) {

        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }

        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }

        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }

</script>



<script>
      var player = new Clappr.Player({
  source: window.atob('aHR0cHM6Ly9kM3IwaG94ejJvaG0zdC5jbG91ZGZyb250Lm5ldC9vdXQvdjEvZmYxMGMzNGFmYzBkNGEwMzhkMDQ3NGU1MWY2Mzc2NDkvZjEubTN1OA=='),
        mediacontrol: {seekbar: "#FF0000", buttons: "#FF0000" } ,
        mimeType: "application/x-mpegURL",
    autoPlay: true,
    mute: false,
        height: "100%",
    width: "100%",
        plugins: [ LevelSelector , ClapprPip.PipButton, ClapprPip.PipPlugin, ChromecastPlugin],
    levelSelectorConfig: {
    title: 'Qualities',
    labels: {
        3: '',
      2: '',
        1: '',
        0: '', 
    },
    labelCallback: function(playbackLevel, customLabel) {
        return customLabel + playbackLevel.level.height+'p'; // High 720p
    }
  },
        parentId: '#player',
        chromecast: {
          appId: '9DFB77C0',
          contentType: 'video/mp4',
          media: {
            type: ChromecastPlugin.Movie,
            title: 'F1 ANT1+',
          },
        }
      });


    </script>
  </body>
</html>
