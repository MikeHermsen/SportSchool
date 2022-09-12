Html5Qrcode.getCameras()
	.then((devices) => {
		/**
		 * devices would be an array of objects of type:
		 * { id: "id", label: "label" }
		 */
		if (devices && devices.length) {
			var cameraId = devices[0].id;
			// .. use this to start scanning.
			let config = {
				fps: 10,

				qrbox: { width: 100, height: 100 },
				rememberLastUsedCamera: true,
				// Only support camera scan type.
				supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA],
			};

			const html5QrCode = new Html5Qrcode(cameraId, config, "reader");

			html5QrCode
				.start(
					cameraId,
					{
						fps: 10, // Optional, frame per seconds for qr code scanning
						qrbox: { width: 250, height: 250 }, // Optional, if you want bounded box UI
					},
					(decodedText, decodedResult) => {
						// do something when code is read
					},
					(errorMessage) => {
						// parse error, ignore it.
					}
				)
				.catch((err) => {
					// Start failed, handle it.
					console.log("Error");
				});
		}
	})
	.catch((err) => {
		// handle err
	});
