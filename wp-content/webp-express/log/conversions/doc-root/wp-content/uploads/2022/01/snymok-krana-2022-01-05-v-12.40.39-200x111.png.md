WebP Express 0.19.0. Conversion triggered using bulk conversion, 2022-01-05 10:47:06

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.27
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
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
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality: 85. 
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png
Dimension: 200 x 111
Output:    5018 bytes Y-U-V-All-PSNR 41.87 42.18 42.36   42.00 dB
block count:  intra4: 90
              intra16: 1  (-> 1.10%)
              skipped block: 0 (0.00%)
bytes used:  header:            124  (2.5%)
             mode-partition:    528  (10.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     456 |     961 |    1601 |     367 |    3385  (67.5%)
 intra16-coeffs:  |       0 |       0 |       0 |      12 |      12  (0.2%)
  chroma coeffs:  |      38 |     324 |     464 |     114 |     940  (18.7%)
    macroblocks:  |       5%|      21%|      51%|      20%|      91
      quantizer:  |      20 |      16 |      13 |      10 |
   filter level:  |       9 |       4 |       3 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     494 |    1285 |    2065 |     493 |    4337  (86.4%)

Success
Reduction: 88% (went from 41 kb to 5 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "kackac" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2022/01/snymok-krana-2022-01-05-v-12.40.39-200x111.png
Dimension: 200 x 111
Output:    29690 bytes
Lossless-ARGB compressed size: 29690 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=2 transform=3 cache=0

Success
Reduction: 29% (went from 41 kb to 29 kb)

Picking lossy
cwebp succeeded :)

Converted image in 716 ms, reducing file size with 88% (went from 41 kb to 5 kb)
