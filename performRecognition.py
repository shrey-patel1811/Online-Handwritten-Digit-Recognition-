# Import the modules
import cv2
from sklearn.externals import joblib
from skimage.feature import hog
import numpy as np
from skimage import io




# Load the classifier
clf = joblib.load("digits_cls.pkl")

# Read the input image

imgg=io.imread("up.png")
#imgg = cv2.imread("5.png")

# Convert to grayscale and apply Gaussian filtering
im_gray = cv2.cvtColor(imgg, cv2.COLOR_BGR2GRAY)
im_gray = cv2.GaussianBlur(im_gray, (5, 5), 0)

ret, im_th = cv2.threshold(im_gray, 90, 255, cv2.THRESH_BINARY_INV)
ctrs, hier = cv2.findContours(im_th.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
rects = [cv2.boundingRect(ctr) for ctr in ctrs]
print ("jh")