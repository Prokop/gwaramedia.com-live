WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-22 12:53:34

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.15
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp
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
- source: [doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp
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
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg
Dimension: 724 x 1024
Output:    44482 bytes Y-U-V-All-PSNR 44.11 52.77 53.87   45.62 dB
block count:  intra4: 803
              intra16: 2141  (-> 72.72%)
              skipped block: 2055 (69.80%)
bytes used:  header:            472  (1.1%)
             mode-partition:   4861  (10.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    6749 |   13289 |   17586 |      64 |   37688  (84.7%)
 intra16-coeffs:  |       0 |       0 |     161 |     146 |     307  (0.7%)
  chroma coeffs:  |       2 |     802 |     302 |      19 |    1125  (2.5%)
    macroblocks:  |       2%|       8%|      22%|      66%|    2944
      quantizer:  |      27 |      27 |      22 |      17 |
   filter level:  |      12 |       9 |       6 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6751 |   14091 |   18049 |     229 |   39120  (87.9%)

Success
Reduction: 44% (went from 78 kb to 43 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/02/kriterii_oczinyuvannya_dlya_onlajn-laboratorii_dlya_menedzheriv_kreativnih_habiv-pdf-724x1024.jpg
Dimension: 724 x 1024
Output:    141942 bytes
Lossless-ARGB compressed size: 141942 bytes
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=9

Success
Reduction: -77% (went from 78 kb to 139 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2238 ms, reducing file size with 44% (went from 78 kb to 43 kb)
