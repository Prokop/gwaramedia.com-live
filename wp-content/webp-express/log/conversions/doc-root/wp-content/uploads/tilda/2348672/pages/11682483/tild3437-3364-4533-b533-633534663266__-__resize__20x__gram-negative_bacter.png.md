WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-07 09:13:18

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.34
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp
- log-call-arguments: true
- converters: (array of 9 items)

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
- source: [doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp
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
Quality: 85. 
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp.lossy.webp'
File:      [doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png
Dimension: 20 x 8
Output:    96 bytes Y-U-V-All-PSNR 44.80 44.39 44.83   44.73 dB
block count:  intra4: 1
              intra16: 1  (-> 50.00%)
              skipped block: 0 (0.00%)
bytes used:  header:             18  (18.8%)
             mode-partition:      6  (6.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      22 |       0 |       0 |       0 |      22  (22.9%)
 intra16-coeffs:  |       0 |       0 |       0 |       2 |       2  (2.1%)
  chroma coeffs:  |      14 |       0 |       0 |       3 |      17  (17.7%)
    macroblocks:  |      50%|       0%|       0%|      50%|       2
      quantizer:  |      20 |      16 |      13 |       8 |
   filter level:  |       9 |       5 |       3 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |      36 |       0 |       0 |       5 |      41  (42.7%)

Success
Reduction: 69% (went from 307 bytes to 96 bytes)

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
nice cwebp -metadata none -q 85 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png' -o '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png.webp.lossless.webp'
File:      [doc-root]wp-content/uploads/tilda/2348672/pages/11682483/tild3437-3364-4533-b533-633534663266__-__resize__20x__gram-negative_bacter.png
Dimension: 20 x 8
Output:    198 bytes
Lossless-ARGB compressed size: 198 bytes
  * Lossless features used: PALETTE
  * Precision Bits: histogram=2 transform=3 cache=0
  * Palette size:   42

Success
Reduction: 36% (went from 307 bytes to 198 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 3316 ms, reducing file size with 69% (went from 307 bytes to 96 bytes)
