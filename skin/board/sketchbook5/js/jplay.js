function link_plays_track(a,b){if(typeof mp3j_info==="undefined"){return}a--;b--;if(a===$link_playID&&b===mp3j_info[a].tr&&$state!==""){return}if(typeof mp3j_info[a].has_ul!=="undefined"&&mp3j_info[a].has_ul===1){if(b>=0&&b<mp3j_info[a].list.length){E_change_track(a,b);$link_playID=a}}}function MI_toggleplaylist(a,b){if(mp3j_info[b].lstate){}if(!mp3j_info[b].lstate){};}function launch_mp3j_popout(a,b){var c=28;player_height=100+mp3j_info[b].height;popout_height=mp3j_info[b].list.length>1?player_height+mp3j_info[b].list.length*c:player_height;if(popout_height>popup_maxheight){popout_height=popup_maxheight}var d=mp3j_info[b].lstate?popout_height:player_height;pp_startplaying=jQuery("#jquery_jplayer").jPlayer("getData","diag.isPlaying")?true:false;pp_playerID=b;play_button($tid);clear_bars($tid);clear_status($tid);$tid="";$state="";$link_playID="";jQuery("#jquery_jplayer").jPlayer("setFile",silence_mp3);jQuery("#jquery_jplayer").jPlayer("play");jQuery("#jquery_jplayer").jPlayer("clearFile");newwindow=window.open(a,"mp3jpopout","height=100,width=100,location=1,status=1,scrollbars=1,resizable=1,left=25,top=25");newwindow.resizeTo(popup_width,d);if(window.focus){newwindow.focus()}return false}function run_progress_update(a,b,c,d,e,f){if(a===""){return}global_lp=b;jQuery("#load_mp3j_"+a).css("width",b+"%");jQuery("#posbar_mp3j_"+a).slider("option","value",d*10);var g=mp3j_info[a].download;if(mp3j_info[a].status==="basic"){jQuery("#indi_mp3j_"+a).empty();if(jQuery("#jquery_jplayer").jPlayer("getData","diag.isPlaying")){if(e===0&&b===0){jQuery("#indi_mp3j_"+a).append('<span style="margin-left:6px;"><span class="mp3-finding"></span><span class="mp3-tint" style="background:#999;"></span></span>');if(g){jQuery("#download_mp3j_"+a).removeClass("whilelinks");jQuery("#download_mp3j_"+a).addClass("betweenlinks")}}if(e===0&&b>0){jQuery("#indi_mp3j_"+a).append('<span style="margin-left:6px;"><span class="mp3-finding"></span><span class="mp3-tint" style="background:#999;"></span></span>');if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}if(e>0){jQuery("#posbar_mp3j_"+a).css("visibility","visible");jQuery("#indi_mp3j_"+a).append('<span style="margin-left:6px;"><span class="mp3-tint" style="opacity:.8; filter:alpha(opacity=80);"></span></span>');jQuery("#indi_mp3j_"+a).append("<span> "+jQuery.jPlayer.convertTime(e)+"</span>");if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}}else{jQuery("#indi_mp3j_"+a).empty();if(e>0){jQuery("#indi_mp3j_"+a).append('<span style="margin-left:6px;"><span class="mp3-tint" style="opacity:.8; filter:alpha(opacity=80);"></span></span>');jQuery("#indi_mp3j_"+a).append("<span> "+jQuery.jPlayer.convertTime(e)+"</span>");if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}if(e===0){if(b>0){if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}}}}if(mp3j_info[a].status==="full"){jQuery("#T-Time-MI_"+a).hide();jQuery("#T-Time-MI_"+a).text(jQuery.jPlayer.convertTime(f));jQuery("#P-Time-MI_"+a).text(jQuery.jPlayer.convertTime(e));jQuery("#statusMI_"+a).empty();if(jQuery("#jquery_jplayer").jPlayer("getData","diag.isPlaying")){if(e===0&&b===0){jQuery("#statusMI_"+a).append('<span class="mp3-finding"></span><span class="mp3-tint"></span>Connecting');if(g){jQuery("#download_mp3j_"+a).removeClass("whilelinks");jQuery("#download_mp3j_"+a).addClass("betweenlinks")}}if(e===0&&b>0){jQuery("#statusMI_"+a).append('<span class="mp3-loading"></span><span class="mp3-tint"></span>Buffering');jQuery("#T-Time-MI_"+a).show();if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}if(e>0){jQuery("#statusMI_"+a).append("Playing");jQuery("#T-Time-MI_"+a).show();if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}}else{if(e>0){jQuery("#statusMI_"+a).append("Paused");jQuery("#T-Time-MI_"+a).show();if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}if(e===0){if(b>0){jQuery("#statusMI_"+a).append("Stopped");jQuery("#T-Time-MI_"+a).show();if(g){jQuery("#download_mp3j_"+a).removeClass("betweenlinks");jQuery("#download_mp3j_"+a).addClass("whilelinks")}}else{jQuery("#statusMI_"+a).append("Ready")}}}}}function change_list_classes(a,b){jQuery("#mp3j_A_"+a+"_"+mp3j_info[a].tr).removeClass("mp3j_A_current").parent().removeClass("mp3j_A_current");jQuery("#mp3j_A_"+a+"_"+b).addClass("mp3j_A_current").parent().addClass("mp3j_A_current")}function make_slider(a){if(mp3j_info[a].status==="basic"){jQuery("#posbar_mp3j_"+a).css("visibility","hidden")}jQuery("#posbar_mp3j_"+a).slider({max:1e3,range:"min",animate:FoxAnimSlider,slide:function(b,c){if($state==="paused"){pause_button(a,mp3j_info[a].play_txt,mp3j_info[a].pause_txt)}jQuery("#jquery_jplayer").jPlayer("playHead",c.value*(10/global_lp));$state="playing"}})}function mp3j_init(){var a;for(a=0;a<mp3j_info.length;a++){if(mp3j_info[a].autoplay){mp3j_info[a].autoplay=false;E_playpause_click(a);return}}}function mp3j_setup(){I_images();I_unwrap();if(typeof mp3j_info!=="undefined"){I_setup_players()}return}var $tid="";var $state="";var global_lp=0;var pp_playerID;var pp_startplaying;var player_height=100;var popout_height;var $link_playID="";jQuery(document).ready(function(){if(typeof mp3j_info==="undefined"){return}mp3j_setup();jQuery("#jquery_jplayer").jPlayer({ready:function(){mp3j_init()},oggSupport:false,volume:100,swfPath:foxpathtoswf}).jPlayer("onProgressChange",function(a,b,c,d,e){run_progress_update($tid,a,b,c,d,e)}).jPlayer("onSoundComplete",function(){run_sound_complete()});if(typeof window.mp3j_footerjs==="function"){mp3j_footerjs()}})