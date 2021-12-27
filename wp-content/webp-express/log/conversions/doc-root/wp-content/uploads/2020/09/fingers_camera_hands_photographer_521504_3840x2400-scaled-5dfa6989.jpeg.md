WebP Express 0.18.2. Conversion triggered with the conversion script (wod/webp-realizer.php), 2020-10-07 12:27:52

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.34
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality set to same as source: 80
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp'
File:      [doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg
Dimension: 1366 x 854
Output:    60798 bytes Y-U-V-All-PSNR 42.54 48.81 47.26   43.72 dB
block count:  intra4: 2634
              intra16: 2010  (-> 43.28%)
              skipped block: 102 (2.20%)
bytes used:  header:            174  (0.3%)
             mode-partition:  12088  (19.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1686 |    7789 |   11717 |    7997 |   29189  (48.0%)
 intra16-coeffs:  |       0 |       0 |    1083 |   13196 |   14279  (23.5%)
  chroma coeffs:  |     218 |    1404 |    2213 |    1204 |    5039  (8.3%)
    macroblocks:  |       0%|       7%|      25%|      65%|    4644
      quantizer:  |      27 |      26 |      23 |      17 |
   filter level:  |      12 |       8 |       6 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1904 |    9193 |   15013 |   22397 |   48507  (79.8%)

Success
Reduction: 54% (went from 130 kb to 59 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg
Dimension: 1366 x 854
Output:    740044 bytes
Lossless-ARGB compressed size: 740044 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=2

executing cweb returned success code - but no file was found at destination!
Creating command line options for version: 0.3.0
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice /usr/bin/cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg
Dimension: 1366 x 854
Output:    740044 bytes
Lossless-ARGB compressed size: 740044 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=2

Success
Reduction: -456% (went from 130 kb to 723 kb)


*Warning: filesize(): stat failed for [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp in [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/EncodingAutoTrait.php, line 70, PHP 7.2.34 (Linux)* 


*Warning: filesize(): stat failed for [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp in [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/EncodingAutoTrait.php, line 70, PHP 7.2.34 (Linux)* 

Picking lossy

*Warning: rename([doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp,[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp): No such file or directory in [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/EncodingAutoTrait.php, line 73, PHP 7.2.34 (Linux)* 


*Warning: rename([doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp.lossy.webp,[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/fingers_camera_hands_photographer_521504_3840x2400-scaled-5dfa6989.jpeg.webp): No such file or directory in [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/EncodingAutoTrait.php, line 73, PHP 7.2.34 (Linux)* 

cwebp succeeded :)

Converted image in 13738 ms, reducing file size with 54% (went from 130 kb to 59 kb)
