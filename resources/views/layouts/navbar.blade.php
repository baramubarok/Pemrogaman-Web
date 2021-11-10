<style>
    .search {
        border: 1px solid #0FAE4E;
        border-radius: 8px;
    }

    .search:focus {
        border: 1px solid #0FAE4E;
        border-radius: 8px;
    }

</style>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <svg width="123" height="52" viewBox="0 0 123 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.2 22.14C5.22667 22.14 4.34667 21.9733 3.56 21.64C2.78667 21.3067 2.17333 20.8267 1.72 20.2C1.26667 19.5733 1.03333 18.8333 1.02 17.98H4.02C4.06 18.5533 4.26 19.0067 4.62 19.34C4.99333 19.6733 5.5 19.84 6.14 19.84C6.79333 19.84 7.30667 19.6867 7.68 19.38C8.05333 19.06 8.24 18.6467 8.24 18.14C8.24 17.7267 8.11333 17.3867 7.86 17.12C7.60667 16.8533 7.28667 16.6467 6.9 16.5C6.52667 16.34 6.00667 16.1667 5.34 15.98C4.43333 15.7133 3.69333 15.4533 3.12 15.2C2.56 14.9333 2.07333 14.54 1.66 14.02C1.26 13.4867 1.06 12.78 1.06 11.9C1.06 11.0733 1.26667 10.3533 1.68 9.74C2.09333 9.12667 2.67333 8.66 3.42 8.34C4.16667 8.00667 5.02 7.84 5.98 7.84C7.42 7.84 8.58667 8.19333 9.48 8.9C10.3867 9.59333 10.8867 10.5667 10.98 11.82H7.9C7.87333 11.34 7.66667 10.9467 7.28 10.64C6.90667 10.32 6.40667 10.16 5.78 10.16C5.23333 10.16 4.79333 10.3 4.46 10.58C4.14 10.86 3.98 11.2667 3.98 11.8C3.98 12.1733 4.1 12.4867 4.34 12.74C4.59333 12.98 4.9 13.18 5.26 13.34C5.63333 13.4867 6.15333 13.66 6.82 13.86C7.72667 14.1267 8.46667 14.3933 9.04 14.66C9.61333 14.9267 10.1067 15.3267 10.52 15.86C10.9333 16.3933 11.14 17.0933 11.14 17.96C11.14 18.7067 10.9467 19.4 10.56 20.04C10.1733 20.68 9.60667 21.1933 8.86 21.58C8.11333 21.9533 7.22667 22.14 6.2 22.14ZM23.8675 16.22C23.8675 16.62 23.8408 16.98 23.7875 17.3H15.6875C15.7542 18.1 16.0342 18.7267 16.5275 19.18C17.0208 19.6333 17.6275 19.86 18.3475 19.86C19.3875 19.86 20.1275 19.4133 20.5675 18.52H23.5875C23.2675 19.5867 22.6542 20.4667 21.7475 21.16C20.8408 21.84 19.7275 22.18 18.4075 22.18C17.3408 22.18 16.3808 21.9467 15.5275 21.48C14.6875 21 14.0275 20.3267 13.5475 19.46C13.0808 18.5933 12.8475 17.5933 12.8475 16.46C12.8475 15.3133 13.0808 14.3067 13.5475 13.44C14.0142 12.5733 14.6675 11.9067 15.5075 11.44C16.3475 10.9733 17.3142 10.74 18.4075 10.74C19.4608 10.74 20.4008 10.9667 21.2275 11.42C22.0675 11.8733 22.7142 12.52 23.1675 13.36C23.6342 14.1867 23.8675 15.14 23.8675 16.22ZM20.9675 15.42C20.9542 14.7 20.6942 14.1267 20.1875 13.7C19.6808 13.26 19.0608 13.04 18.3275 13.04C17.6342 13.04 17.0475 13.2533 16.5675 13.68C16.1008 14.0933 15.8142 14.6733 15.7075 15.42H20.9675ZM25.1912 16.42C25.1912 15.3 25.4112 14.3067 25.8512 13.44C26.3046 12.5733 26.9113 11.9067 27.6713 11.44C28.4446 10.9733 29.3046 10.74 30.2513 10.74C31.0779 10.74 31.7979 10.9067 32.4113 11.24C33.0379 11.5733 33.5379 11.9933 33.9113 12.5V10.92H36.7313V22H33.9113V20.38C33.5513 20.9 33.0513 21.3333 32.4113 21.68C31.7846 22.0133 31.0579 22.18 30.2313 22.18C29.2979 22.18 28.4446 21.94 27.6713 21.46C26.9113 20.98 26.3046 20.3067 25.8512 19.44C25.4112 18.56 25.1912 17.5533 25.1912 16.42ZM33.9113 16.46C33.9113 15.78 33.7779 15.2 33.5113 14.72C33.2446 14.2267 32.8846 13.8533 32.4313 13.6C31.9779 13.3333 31.4913 13.2 30.9713 13.2C30.4513 13.2 29.9713 13.3267 29.5312 13.58C29.0913 13.8333 28.7313 14.2067 28.4513 14.7C28.1846 15.18 28.0513 15.7533 28.0513 16.42C28.0513 17.0867 28.1846 17.6733 28.4513 18.18C28.7313 18.6733 29.0913 19.0533 29.5312 19.32C29.9846 19.5867 30.4646 19.72 30.9713 19.72C31.4913 19.72 31.9779 19.5933 32.4313 19.34C32.8846 19.0733 33.2446 18.7 33.5113 18.22C33.7779 17.7267 33.9113 17.14 33.9113 16.46ZM42.2659 12.64C42.6259 12.0533 43.0926 11.5933 43.6659 11.26C44.2526 10.9267 44.9193 10.76 45.6659 10.76V13.7H44.9259C44.0459 13.7 43.3793 13.9067 42.9259 14.32C42.4859 14.7333 42.2659 15.4533 42.2659 16.48V22H39.4659V10.92H42.2659V12.64ZM46.8319 16.46C46.8319 15.3133 47.0652 14.3133 47.5319 13.46C47.9985 12.5933 48.6452 11.9267 49.4719 11.46C50.2985 10.98 51.2452 10.74 52.3119 10.74C53.6852 10.74 54.8185 11.0867 55.7119 11.78C56.6185 12.46 57.2252 13.42 57.5319 14.66H54.5119C54.3519 14.18 54.0785 13.8067 53.6919 13.54C53.3185 13.26 52.8519 13.12 52.2919 13.12C51.4919 13.12 50.8585 13.4133 50.3919 14C49.9252 14.5733 49.6919 15.3933 49.6919 16.46C49.6919 17.5133 49.9252 18.3333 50.3919 18.92C50.8585 19.4933 51.4919 19.78 52.2919 19.78C53.4252 19.78 54.1652 19.2733 54.5119 18.26H57.5319C57.2252 19.46 56.6185 20.4133 55.7119 21.12C54.8052 21.8267 53.6719 22.18 52.3119 22.18C51.2452 22.18 50.2985 21.9467 49.4719 21.48C48.6452 21 47.9985 20.3333 47.5319 19.48C47.0652 18.6133 46.8319 17.6067 46.8319 16.46ZM65.8231 10.76C66.6631 10.76 67.4098 10.9467 68.0631 11.32C68.7165 11.68 69.2231 12.22 69.5831 12.94C69.9565 13.6467 70.1431 14.5 70.1431 15.5V22H67.3431V15.88C67.3431 15 67.1231 14.3267 66.6831 13.86C66.2431 13.38 65.6431 13.14 64.8831 13.14C64.1098 13.14 63.4965 13.38 63.0431 13.86C62.6031 14.3267 62.3831 15 62.3831 15.88V22H59.5831V7.2H62.3831V12.3C62.7431 11.82 63.2231 11.4467 63.8231 11.18C64.4231 10.9 65.0898 10.76 65.8231 10.76Z"
                    fill="#5CCA7A" />
                <path
                    d="M54.2 44.14C53.2267 44.14 52.3467 43.9733 51.56 43.64C50.7867 43.3067 50.1733 42.8267 49.72 42.2C49.2667 41.5733 49.0333 40.8333 49.02 39.98H52.02C52.06 40.5533 52.26 41.0067 52.62 41.34C52.9933 41.6733 53.5 41.84 54.14 41.84C54.7933 41.84 55.3067 41.6867 55.68 41.38C56.0533 41.06 56.24 40.6467 56.24 40.14C56.24 39.7267 56.1133 39.3867 55.86 39.12C55.6067 38.8533 55.2867 38.6467 54.9 38.5C54.5267 38.34 54.0067 38.1667 53.34 37.98C52.4333 37.7133 51.6933 37.4533 51.12 37.2C50.56 36.9333 50.0733 36.54 49.66 36.02C49.26 35.4867 49.06 34.78 49.06 33.9C49.06 33.0733 49.2667 32.3533 49.68 31.74C50.0933 31.1267 50.6733 30.66 51.42 30.34C52.1667 30.0067 53.02 29.84 53.98 29.84C55.42 29.84 56.5867 30.1933 57.48 30.9C58.3867 31.5933 58.8867 32.5667 58.98 33.82H55.9C55.8733 33.34 55.6667 32.9467 55.28 32.64C54.9067 32.32 54.4067 32.16 53.78 32.16C53.2333 32.16 52.7933 32.3 52.46 32.58C52.14 32.86 51.98 33.2667 51.98 33.8C51.98 34.1733 52.1 34.4867 52.34 34.74C52.5933 34.98 52.9 35.18 53.26 35.34C53.6333 35.4867 54.1533 35.66 54.82 35.86C55.7267 36.1267 56.4667 36.3933 57.04 36.66C57.6133 36.9267 58.1067 37.3267 58.52 37.86C58.9333 38.3933 59.14 39.0933 59.14 39.96C59.14 40.7067 58.9467 41.4 58.56 42.04C58.1733 42.68 57.6067 43.1933 56.86 43.58C56.1133 43.9533 55.2267 44.14 54.2 44.14ZM71.8675 38.22C71.8675 38.62 71.8408 38.98 71.7875 39.3H63.6875C63.7542 40.1 64.0342 40.7267 64.5275 41.18C65.0208 41.6333 65.6275 41.86 66.3475 41.86C67.3875 41.86 68.1275 41.4133 68.5675 40.52H71.5875C71.2675 41.5867 70.6542 42.4667 69.7475 43.16C68.8408 43.84 67.7275 44.18 66.4075 44.18C65.3408 44.18 64.3808 43.9467 63.5275 43.48C62.6875 43 62.0275 42.3267 61.5475 41.46C61.0808 40.5933 60.8475 39.5933 60.8475 38.46C60.8475 37.3133 61.0808 36.3067 61.5475 35.44C62.0142 34.5733 62.6675 33.9067 63.5075 33.44C64.3475 32.9733 65.3142 32.74 66.4075 32.74C67.4608 32.74 68.4008 32.9667 69.2275 33.42C70.0675 33.8733 70.7142 34.52 71.1675 35.36C71.6342 36.1867 71.8675 37.14 71.8675 38.22ZM68.9675 37.42C68.9542 36.7 68.6942 36.1267 68.1875 35.7C67.6808 35.26 67.0608 35.04 66.3275 35.04C65.6342 35.04 65.0475 35.2533 64.5675 35.68C64.1008 36.0933 63.8142 36.6733 63.7075 37.42H68.9675ZM76.7113 34.64C77.0713 34.0533 77.5379 33.5933 78.1113 33.26C78.6979 32.9267 79.3646 32.76 80.1113 32.76V35.7H79.3713C78.4913 35.7 77.8246 35.9067 77.3713 36.32C76.9313 36.7333 76.7113 37.4533 76.7113 38.48V44H73.9113V32.92H76.7113V34.64ZM86.6172 41.42L89.4172 32.92H92.3972L88.2972 44H84.8972L80.8172 32.92H83.8172L86.6172 41.42ZM95.3898 31.6C94.8965 31.6 94.4832 31.4467 94.1498 31.14C93.8298 30.82 93.6698 30.4267 93.6698 29.96C93.6698 29.4933 93.8298 29.1067 94.1498 28.8C94.4832 28.48 94.8965 28.32 95.3898 28.32C95.8832 28.32 96.2898 28.48 96.6098 28.8C96.9432 29.1067 97.1098 29.4933 97.1098 29.96C97.1098 30.4267 96.9432 30.82 96.6098 31.14C96.2898 31.4467 95.8832 31.6 95.3898 31.6ZM96.7698 32.92V44H93.9698V32.92H96.7698ZM98.8162 38.46C98.8162 37.3133 99.0496 36.3133 99.5163 35.46C99.9829 34.5933 100.63 33.9267 101.456 33.46C102.283 32.98 103.23 32.74 104.296 32.74C105.67 32.74 106.803 33.0867 107.696 33.78C108.603 34.46 109.21 35.42 109.516 36.66H106.496C106.336 36.18 106.063 35.8067 105.676 35.54C105.303 35.26 104.836 35.12 104.276 35.12C103.476 35.12 102.843 35.4133 102.376 36C101.91 36.5733 101.676 37.3933 101.676 38.46C101.676 39.5133 101.91 40.3333 102.376 40.92C102.843 41.4933 103.476 41.78 104.276 41.78C105.41 41.78 106.15 41.2733 106.496 40.26H109.516C109.21 41.46 108.603 42.4133 107.696 43.12C106.79 43.8267 105.656 44.18 104.296 44.18C103.23 44.18 102.283 43.9467 101.456 43.48C100.63 43 99.9829 42.3333 99.5163 41.48C99.0496 40.6133 98.8162 39.6067 98.8162 38.46ZM121.868 38.22C121.868 38.62 121.841 38.98 121.788 39.3H113.688C113.754 40.1 114.034 40.7267 114.528 41.18C115.021 41.6333 115.628 41.86 116.348 41.86C117.388 41.86 118.128 41.4133 118.568 40.52H121.588C121.268 41.5867 120.654 42.4667 119.748 43.16C118.841 43.84 117.728 44.18 116.408 44.18C115.341 44.18 114.381 43.9467 113.528 43.48C112.688 43 112.028 42.3267 111.548 41.46C111.081 40.5933 110.847 39.5933 110.847 38.46C110.847 37.3133 111.081 36.3067 111.548 35.44C112.014 34.5733 112.668 33.9067 113.508 33.44C114.348 32.9733 115.314 32.74 116.408 32.74C117.461 32.74 118.401 32.9667 119.228 33.42C120.068 33.8733 120.714 34.52 121.168 35.36C121.634 36.1867 121.868 37.14 121.868 38.22ZM118.968 37.42C118.954 36.7 118.694 36.1267 118.188 35.7C117.681 35.26 117.061 35.04 116.328 35.04C115.634 35.04 115.048 35.2533 114.568 35.68C114.101 36.0933 113.814 36.6733 113.708 37.42H118.968Z"
                    fill="#5CCA7A" />
                <path
                    d="M13.906 42.24C12.694 42.24 11.716 41.994 10.972 41.502C10.972 40.458 11.464 39.48 12.448 38.568C11.812 38.208 11.494 37.47 11.494 36.354L11.53 35.472L11.566 34.41C11.566 33.186 11.458 32.334 11.242 31.854C11.578 31.722 11.89 31.632 12.178 31.584C12.466 31.524 12.814 31.494 13.222 31.494C13.15 32.19 13.114 33.768 13.114 36.228C13.114 36.708 13.21 37.056 13.402 37.272C13.594 37.476 13.912 37.578 14.356 37.578C15.052 37.578 15.64 37.422 16.12 37.11L16.084 35.004C16.072 34.812 16.066 34.602 16.066 34.374C16.066 33.81 16.036 33.306 15.976 32.862C15.916 32.418 15.832 32.082 15.724 31.854C16.312 31.614 16.978 31.494 17.722 31.494C17.638 32.466 17.596 33.966 17.596 35.994C17.596 36.81 17.608 37.5 17.632 38.064C17.656 38.616 17.668 38.928 17.668 39C17.668 40.068 17.326 40.872 16.642 41.412C15.958 41.964 15.046 42.24 13.906 42.24ZM14.068 41.268C14.728 41.268 15.232 41.064 15.58 40.656C15.94 40.26 16.12 39.564 16.12 38.568V37.722C15.772 38.082 15.382 38.358 14.95 38.55C14.53 38.742 14.08 38.838 13.6 38.838C13.48 38.838 13.312 38.826 13.096 38.802C12.616 39.378 12.322 39.948 12.214 40.512C12.43 40.74 12.7 40.92 13.024 41.052C13.36 41.196 13.708 41.268 14.068 41.268ZM22.8918 39.198C21.9078 39.198 21.1158 38.862 20.5158 38.19C19.9158 37.518 19.6158 36.636 19.6158 35.544C19.6158 34.752 19.7778 34.05 20.1018 33.438C20.4378 32.814 20.8998 32.334 21.4878 31.998C22.0878 31.65 22.7658 31.476 23.5218 31.476C24.1938 31.476 24.7878 31.632 25.3038 31.944C25.8198 32.244 26.2158 32.67 26.4918 33.222C26.7798 33.774 26.9238 34.41 26.9238 35.13C26.9238 35.922 26.7498 36.63 26.4018 37.254C26.0658 37.866 25.5918 38.346 24.9798 38.694C24.3678 39.03 23.6718 39.198 22.8918 39.198ZM23.2158 38.442C23.8998 38.442 24.4338 38.214 24.8178 37.758C25.2018 37.29 25.3938 36.636 25.3938 35.796C25.3938 35.052 25.2198 34.41 24.8718 33.87C24.5238 33.33 24.0438 32.964 23.4318 32.772C22.7358 32.772 22.1778 33.012 21.7578 33.492C21.3498 33.96 21.1458 34.596 21.1458 35.4C21.1458 36.336 21.3378 37.08 21.7218 37.632C22.1178 38.172 22.6158 38.442 23.2158 38.442ZM31.1756 39.198C29.7956 39.198 29.1056 38.37 29.1056 36.714L29.1416 35.58L29.1776 34.374C29.1776 33.198 29.0636 32.358 28.8356 31.854C29.4236 31.614 30.0836 31.494 30.8156 31.494C30.7436 32.958 30.7076 34.638 30.7076 36.534C30.7076 37.014 30.8096 37.368 31.0136 37.596C31.2176 37.812 31.5476 37.92 32.0036 37.92C32.5916 37.92 33.1256 37.782 33.6056 37.506C33.6056 36.702 33.6236 35.988 33.6596 35.364L33.6776 34.374C33.6776 33.198 33.5636 32.358 33.3356 31.854C33.9236 31.614 34.5896 31.494 35.3336 31.494C35.2856 32.322 35.2376 33.306 35.1896 34.446C35.1416 35.574 35.1176 36.33 35.1176 36.714C35.1176 37.146 35.1656 37.488 35.2616 37.74C35.3576 37.992 35.5436 38.262 35.8196 38.55C35.3876 38.91 34.9076 39.126 34.3796 39.198C34.0196 38.946 33.7856 38.586 33.6776 38.118C33.3536 38.454 32.9696 38.718 32.5256 38.91C32.0936 39.102 31.6436 39.198 31.1756 39.198ZM39.3677 39.108C39.0677 39.108 38.7197 39.072 38.3237 39C38.4077 37.8 38.4497 36.522 38.4497 35.166C38.4497 34.506 38.4257 34.002 38.3777 33.654C38.3417 33.306 38.2757 33.03 38.1797 32.826C38.0957 32.622 37.9517 32.412 37.7477 32.196C37.9397 31.98 38.1497 31.818 38.3777 31.71C38.6057 31.602 38.8097 31.548 38.9897 31.548C39.6737 31.548 40.0337 31.992 40.0697 32.88C40.3817 32.496 40.7117 32.184 41.0597 31.944C41.4197 31.692 41.8277 31.506 42.2837 31.386C42.3677 31.578 42.4397 31.854 42.4997 32.214C42.5717 32.574 42.6077 32.904 42.6077 33.204C42.4637 33.18 42.2597 33.168 41.9957 33.168C41.6117 33.168 41.2457 33.216 40.8977 33.312C40.5497 33.396 40.2677 33.504 40.0517 33.636L40.0337 34.194C40.0097 34.986 39.9977 35.688 39.9977 36.3C39.9977 37.56 40.1177 38.46 40.3577 39C39.9977 39.072 39.6677 39.108 39.3677 39.108Z"
                    fill="black" />
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-semi" href="/">Service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-semi" href="/">Explore</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <div class="form-group my-auto">
                        <input type="text" class="form-control search" id="search" placeholder="Search Service">
                    </div>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item mr-4">
                            <a class="nav-link height-22 text-green font-weight-semi"
                                href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        </li>
                    @endif

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-primary rounded-8" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                        </li>
                    @endif


                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
