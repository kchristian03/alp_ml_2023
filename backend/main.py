import joblib
import pandas as pd
import json
import pickle
from flask import Flask, request, jsonify

model = joblib.load('ada_boost_model.pkl')

# import ada_boost_model  # Import your model
# loaded_model = joblib.load('model/ada_boost_model.pkl')

app = Flask(__name__)

@app.route('/predict_stroke', methods=['POST'])
def predict_stroke():
    # data = request.get_json()
    gender = int(request.form.get('gender'))
    age = float(request.form.get('age'))
    hypertension = int(request.form.get('hypertension'))
    heart_disease = int(request.form.get('heart_disease'))
    ever_married = int(request.form.get('ever_married'))
    work_type = int(request.form.get('work_type'))
    Residence_type = int(request.form.get('Residence_type'))
    avg_glucose_level = float(request.form.get('avg_glucose_level'))
    bmi = float(request.form.get('bmi'))
    smoking_status = int(request.form.get('smoking_status'))

    features = [gender, age, hypertension, heart_disease, ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status]
    prediction = model.predict([features])
    prediction_list = prediction.tolist() 
    # data_array = json.loads(data)  # Get the data from the PHP request
    # prediction = model.predict([[0, 81, 0, 0, 0, 0, 0, 186.21, 29.0, 0]])# Use your model to predict
    return jsonify({'prediction': prediction_list})  # Return the prediction as JSON

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)  # Start the API server
