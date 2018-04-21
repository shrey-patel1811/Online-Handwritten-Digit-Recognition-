# Import the modules
import cv2
from sklearn.externals import joblib
from skimage.feature import hog
import numpy as np
from skimage import io
import os

count = 0
while (count < 1000000):
            clf = joblib.load("digits_cls.pkl")
            try:
                imgg = io.imread("/Applications/XAMPP/xamppfiles/htdocs/up.png")
                #imgg=io.imread('up.png')
                im_gray = cv2.cvtColor(imgg, cv2.COLOR_BGR2GRAY)
                im_gray = cv2.GaussianBlur(im_gray, (5, 5), 0)
                ret, im_th = cv2.threshold(im_gray, 90, 255, cv2.THRESH_BINARY_INV)
                ctrs, hier = cv2.findContours(im_th.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
                rects = [cv2.boundingRect(ctr) for ctr in ctrs]
                for rect in rects:
                    cv2.rectangle(imgg, (rect[0], rect[1]), (rect[0] + rect[2], rect[1] + rect[3]), (0, 255, 0), 3)
                    # Make the rectangular region around the digit
                    leng = int(rect[3] * 1.6)
                    pt1 = int(rect[1] + rect[3] // 2 - leng // 2)
                    pt2 = int(rect[0] + rect[2] // 2 - leng // 2)
                    roi = im_th[pt1:pt1 + leng, pt2:pt2 + leng]
                    # Resize the image
                    roi = cv2.resize(roi, (30, 30), interpolation=cv2.INTER_AREA)
                    roi = cv2.dilate(roi, (3, 3))
                    # Calculate the HOG features
                    roi_hog_fd = hog(roi, orientations=9, pixels_per_cell=(14, 14), cells_per_block=(1, 1), visualise=False)
                    nbr = clf.predict(np.array([roi_hog_fd], 'float64'))
                    cv2.putText(imgg, str(int(nbr[0])), (rect[0], rect[1]), cv2.FONT_HERSHEY_DUPLEX, 2, (0, 255, 255), 3)
                cv2.imshow("Resulting Image with Rectangular ROIs", imgg)
                path = '/Applications/XAMPP/xamppfiles/htdocs/'
                cv2.imwrite(os.path.join(path, 'result.jpg'), imgg)
                cv2.waitKey()
                print ("jh")
            except Exception:
                print count
                count = count + 1


