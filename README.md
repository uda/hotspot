# No2Bio Hotspot

TP-WR841N devices will serve as propaganda hotspots at selected locations. OpenWRT images baked from this repository based on the [OpenWRT Image Generator](http://wiki.openwrt.org/doc/howto/obtain.firmware.generate).

## Generate an Image (Linux only)

```bash
$ cd hotspot
$ wget http://downloads.openwrt.org/attitude_adjustment/12.09/ar71xx/generic/OpenWrt-ImageBuilder-ar71xx_generic-for-linux-i486.tar.bz2
$ tar -xvjf OpenWrt-ImageBuilder-ar71xx_generic-for-linux-i486.tar.bz2
$ cd OpenWrt-ImageBuilder-ar71xx_generic-for-linux-i486
$ make image PROFILE=TLWR841
```
