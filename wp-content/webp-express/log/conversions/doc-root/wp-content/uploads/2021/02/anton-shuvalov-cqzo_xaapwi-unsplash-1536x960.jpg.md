WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-05 14:40:58

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.34
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

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
- source: [doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp
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
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp.lossy.webp'
File:      [doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg
Dimension: 1536 x 960
Output:    32344 bytes Y-U-V-All-PSNR 47.32 49.49 48.22   47.76 dB
block count:  intra4: 1475
              intra16: 4285  (-> 74.39%)
              skipped block: 2521 (43.77%)
bytes used:  header:            141  (0.4%)
             mode-partition:   8933  (27.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     660 |    5806 |    4263 |    1724 |   12453  (38.5%)
 intra16-coeffs:  |       0 |      15 |     706 |    3335 |    4056  (12.5%)
  chroma coeffs:  |     112 |    2369 |    1918 |    2335 |    6734  (20.8%)
    macroblocks:  |       0%|       5%|      12%|      82%|    5760
      quantizer:  |      27 |      27 |      23 |      18 |
   filter level:  |      12 |       8 |       6 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     772 |    8190 |    6887 |    7394 |   23243  (71.9%)

Success
Reduction: 58% (went from 74 kb to 32 kb)

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
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
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
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/2021/02/anton-shuvalov-cqzo_xaapwi-unsplash-1536x960.jpg
Dimension: 1536 x 960
Output:    474588 bytes
Lossless-ARGB compressed size: 474588 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=0

Success
Reduction: -523% (went from 74 kb to 463 kb)

Picking lossy
cwebp succeeded :)

Converted image in 7253 ms, reducing file size with 58% (went from 74 kb to 32 kb)
