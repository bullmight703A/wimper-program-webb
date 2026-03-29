tailwind.config = {
	theme: {
		extend: {
			fontFamily: {
				sans: ['Outfit', 'sans-serif'],
				serif: ['Outfit', 'sans-serif']
			},
			colors: {
				// The new specific WIMPER colors
				wimper: {
					blueDark: '#2F4858',
					blue: '#3B82F6',
					cyan: '#06B6D4',
					slate: '#475569'
                },
				// Aliasing legacy global colors directly to the new Wimper visual spec 
				// to automatically re-theme all remaining site pages without rebuilding them!
				navy: '#2F4858',
				gold: '#06B6D4',
				brand: '#3B82F6',
				kidazzle: {
					blueDark: '#2F4858',
					blue: '#3B82F6',
					gold: '#06B6D4'
				}
			}
		}
	}
};
