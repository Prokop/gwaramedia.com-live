WebP Express 0.18.2. Conversion triggered with the conversion script (wod/webp-realizer.php), 2020-10-07 12:06:51

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.34
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp
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
- source: [doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp
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
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp.lossy.webp'
File:      [doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg
Dimension: 1366 x 910
Output:    115734 bytes Y-U-V-All-PSNR 41.66 66.26 66.16   43.41 dB
block count:  intra4: 3263
              intra16: 1639  (-> 33.44%)
              skipped block: 1005 (20.50%)
bytes used:  header:            213  (0.2%)
             mode-partition:  17645  (15.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   15880 |   17250 |   56641 |    3881 |   93652  (80.9%)
 intra16-coeffs:  |       0 |       0 |    1971 |    2140 |    4111  (3.6%)
  chroma coeffs:  |       3 |       5 |      62 |      15 |      85  (0.1%)
    macroblocks:  |       4%|       6%|      56%|      33%|    4902
      quantizer:  |      27 |      24 |      20 |      16 |
   filter level:  |      12 |       7 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   15883 |   17255 |   58674 |    6036 |   97848  (84.5%)

Success
Reduction: 37% (went from 179 kb to 113 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/2020/09/womensupportingwomen-que-signifient-ces-photos-en-noir-et-blanc-sur-instagram-74a8e519-1.jpeg
Dimension: 1366 x 910
Output:    509772 bytes
Lossless-ARGB compressed size: 509772 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=9

Success
Reduction: -178% (went from 179 kb to 498 kb)

Picking lossy
cwebp succeeded :)

Converted image in 70899 ms, reducing file size with 37% (went from 179 kb to 113 kb)
