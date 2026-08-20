<head>
    <link rel="stylesheet" href="./web/styles/animatedBackground.css">
</head>
<div class="animated_wrap" id="tsparticles"></div>
<script src="https://cdn.jsdelivr.net/npm/tsparticles-preset-firefly@2/tsparticles.preset.firefly.bundle.min.js"></script>
<script>
    (async () => {
        // this is required only if you are not using the bundle script
        await loadFireflyPreset(tsParticles);

        await tsParticles.load("tsparticles", {
            preset: "firefly",
        });
    })();
</script>