WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-12-30 14:56:38

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.34
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/12/maxresdefault.jpg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp
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
- source: [doc-root]wp-content/uploads/2020/12/maxresdefault.jpg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp
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
Quality of source is 87. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]wp-content/uploads/2020/12/maxresdefault.jpg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp.lossy.webp'
File:      [doc-root]wp-content/uploads/2020/12/maxresdefault.jpg
Dimension: 1280 x 720
Output:    154392 bytes Y-U-V-All-PSNR 39.60 43.73 41.91   40.41 dB
block count:  intra4: 2897
              intra16: 703  (-> 19.53%)
              skipped block: 37 (1.03%)
bytes used:  header:            443  (0.3%)
             mode-partition:  14642  (9.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   18800 |   32007 |   51883 |    6086 |  108776  (70.5%)
 intra16-coeffs:  |      52 |     187 |    3023 |    8617 |   11879  (7.7%)
  chroma coeffs:  |    2831 |    5228 |    8217 |    2348 |   18624  (12.1%)
    macroblocks:  |       8%|      18%|      47%|      25%|    3600
      quantizer:  |      27 |      24 |      19 |      14 |
   filter level:  |      12 |       8 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   21683 |   37422 |   63123 |   17051 |  139279  (90.2%)

Success
Reduction: 23% (went from 196 kb to 151 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/2020/12/maxresdefault.jpg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/maxresdefault.jpg.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/2020/12/maxresdefault.jpg
Dimension: 1280 x 720
Output:    1080790 bytes
Lossless-ARGB compressed size: 1080790 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=1

Success
Reduction: -439% (went from 196 kb to 1055 kb)

Picking lossy
cwebp succeeded :)

Converted image in 6063 ms, reducing file size with 23% (went from 196 kb to 151 kb)
