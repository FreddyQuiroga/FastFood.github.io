PalettePackerVersion 
- can be used if images having 5-10 colors.
- uses picture palette, in some cases could reduce pack weight.
- create file raw.cfg with content 1,4,2,5,66 (near .json) to force raw image mode for selected image IDs in raw.cfg
- will compress images if it's not fitting in 254 color palette
RawPackerVersion 
- can provide more quality for image.
- normally working with 32&16bit images, raw look. Can greatly increase the size of the build.


v1.4.1
https://yadi.sk/d/qcQN824qWeP2lw
- Linux will use old GIF builder
- Other bugfixes
- New WF support
- Added new elements (time delimiter / step icon / linear progress )

  "Time": {
    "DelimiterImage": { <------------------
      "X": 57,
      "Y": 65,
      "ImageIndex": 10
    }
  },
  "Activity": {
    "Steps": {
      "StepsImageIndex": 57  <-----------------aligement dependent-
    }
  },
  "StepsProgress": {
    "SolidImage": {  <------------------
      "Start": {
        "X": 2,
        "Y": 150
      },
      "End": {
        "X": 102,
        "Y": 150
      },
      "ImageIndex": 58, // not working?! 
      "Background": {
        "X": 2,
        "Y": 150,
        "ImageIndex": 59
      }
    }
  }


v1.3.9
- Removed dependence on images order 0000->XXXX
- Calories rendering fixed
- Added ability to change Preview Speed (available from 50ms - 1000ms)
- TimeElement DrawingOrder hardcoded to 1234 (not used by MiBand4)
- [JSON] Calories model update DelimiterImageIndex->SuffixImageIndex
- [JSON] Animation Speed discovered x1 -> Speed (Recommended 0-45)
- [JSON] Animation ImageCount -> ImagesCount
- [JSON] DayAmPm  TopLeftX -> X , TopLeftY -> Y
- [JSON] Steps  Step -> Number
- [JSON] Pulse  Pulse -> Number
- [JSON] Calories  Calories -> Number


v1.3.7 
- Added ability to prepick witch weekdays language set are used (0-SimpleChinese, 1-Chinese, 2-English). Config file:"WatchFace.exe.config"(ex. "0" will use weekdays from 0-7 images, "1" will use 7-14, "2" will use 14-21)

