<?php
/*
 * Copyright (C) 2013-2014 RuneAudio Team
 * http://www.runeaudio.com
 *
 * RuneUI
 * copyright (C) 2013-2014 - Andrea Coiutti (aka ACX) & Simone De Gregori (aka Orion)
 *
 * RuneOS
 * copyright (C) 2013-2014 - Simone De Gregori (aka Orion) & Carmelo San Giovanni (aka Um3ggh1U)
 *
 * RuneAudio website and logo
 * copyright (C) 2013-2014 - ACX webdesign (Andrea Coiutti)
 *
 * This Program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3, or (at your option)
 * any later version.
 *
 * This Program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with RuneAudio; see the file COPYING.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.txt>.
 *
 *  file: db/redis_acards_details.php
 *  version: 1.3
 *  coder: Simone De Gregori
 *
 */

// common include
include($_SERVER['HOME'].'/app/config/config.php');
// ini_set('display_errors',1);
// error_reporting('E_ALL');

// acards_details database
$redis->hSet('acards_details','snd_rpi_iqaudio_dac','{"sysname":"snd_rpi_iqaudio_dac","extlabel":"IQaudIO Pi-DAC &#8722; I&#178;S","mixer_numid":"1","mixer_control":"Playback Digital","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','berrynosmini','{"sysname":"snd_rpi_hifiberry_dac","extlabel":"BerryNOS mini &#8722; I&#178;S","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','berrynos','{"sysname":"snd_rpi_hifiberry_dac","extlabel":"BerryNOS 1543 &#8722; I&#178;S","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','snd_rpi_hifiberry_dac','{"sysname":"snd_rpi_hifiberry_dac","extlabel":"HiFiBerry DAC &#8722; I&#178;S","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','snd_rpi_hifiberry_digi','{"sysname":"snd_rpi_hifiberry_digi","extlabel":"HiFiBerry Digi &#8722; I&#178;S","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','raspi2splay3','{"sysname":"snd_rpi_hifiberry_dac","extlabel":"RaspI2SPlay3 &#8722; I&#178;S","hwplatformid":"01","type":"i2s"}');
$redis->hSet('acards_details','XMOS USB Audio 2.0','{"sysname":"XMOS USB Audio 2.0","extlabel":"XMOS AK4399 USB-Audio DAC","mixer_numid":"3","mixer_control":"XMOS Clock Selector","type":"usb"}');
$redis->hSet('acards_details','wm8731-audio','{"sysname":"wm8731-audio","extlabel":"Utilite Analog Out","mixer_numid":"1","mixer_control":"Master","hwplatformid":"05","type":"integrated"}');
$redis->hSet('acards_details','imx-spdif','{"sysname":"imx-spdif","extlabel":"Utilite Coax SPDIF Out","hwplatformid":"05","type":"integrated"}');
$redis->hSet('acards_details','imx-hdmi-soc','{"sysname":"imx-hdmi-soc","extlabel":"Utilite HDMI Out","hwplatformid":"05","type":"integrated"}');
$redis->hSet('acards_details','bcm2835 ALSA','{"sysname":"bcm2835 ALSA","extlabel":"none","hwplatformid":"01","type":"integrated_sub"}');
$redis->hSet('acards_details','SA9023 USB Audio','{"sysname":"SA9023 USB Audio","extlabel":"HiFimeDIY SABRE U2","mixer_numid":"4","mixer_control":"PCM","type":"usb"}');
$redis->sAdd('bcm2835 ALSA','{"id:"1","sysname":"bcm2835 ALSA","extlabel":"RaspberryPi Analog Out","hwplatformid":"01","route_cmd":"amixer -c *CARDID* cset numid=3 1 > /dev/null"}');
$redis->sAdd('bcm2835 ALSA','{"id:"2","sysname":"bcm2835 ALSA","extlabel":"RaspberryPi HDMI Out","hwplatformid":"01","route_cmd":"amixer -c *CARDID* cset numid=3 2 > /dev/null"}');